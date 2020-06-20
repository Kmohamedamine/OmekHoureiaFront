
<?PHP
include "../entities/client.php";
include "../core/clientc.php";



if ( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['Mdp']) and isset($_POST['username']) and isset($_POST['telephone']) and isset($_POST['mail']) and isset($_POST['addresse']) and isset($_POST['datenaissance'])  ){
$client1=new client($_POST['nom'],$_POST['prenom'],$_POST['Mdp'],$_POST['telephone'],$_POST['username'],$_POST['mail'],$_POST['addresse'],$_POST['datenaissance']);
//Partie2
/*
var_dump($client1);
}
*/
//Partie3
$client1C=new clientc();
$client1C->ajouterclient($client1);

session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION ['Mdp'] = $_POST['Mdp'];

header('Location: ../');

  
}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type = "text/css" href ="css/myrestaurant.css">
 <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Omek houreia</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li>
              <a href="reservation.html">Reserver une table</a>
                    </li>
          </ul>

                           <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up </a>
            
            </li>

            <li><a href="login.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login </a>
              
            </li>
          </ul>

         
            
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Bienvenue! </h1>
     <p>Inscrivez-vous!</p>

    </div>
    </div>
<div class="container">
    <div class="container">
      <div class="col">
        
      </div>
    </div>

    
    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form method="POST" action="ajoutclient.php">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Mes informations</h3>

          <div class="form-group">
            <input type="text" class="form-control"  name="nom" placeholder="Votre Nom" onblur="return veriftaille(this);" autocomplete="off">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="prenom" placeholder="Votre Prenom" onblur="return veriftaille(this);" autocomplete="off">
          </div>

          <div class="form-group">
            <input type="Password" class="form-control"  name="Mdp" id="Mdp" placeholder="Votre Mot de passe" >
          </div>

          <div class="form-group">
            <input type="Password" class="form-control"  name="Mdpp" id="Mdpp" placeholder="Reecrire votre mot de passe" >
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="username" placeholder="Votre Nom d'utilisateur" autocomplete="off" onblur="return verifusernameunique(this);">
            
          </div>

          <div class="form-group">
            <input type="tel" class="form-control"  name="telephone" pattern="(9|5|2|4)[0-9]{7}" placeholder="Votre numero telephonique" required autocomplete="off">
          </div>

          <div class="form-group">
            <input type="email" class="form-control"  name="mail" placeholder="Votre Email" required autocomplete="off">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control"  name="addresse" placeholder="Votre adresse" autocomplete="off">
          </div>

          <div class="form-group">
            <input type="Date" class="form-control"  name="datenaissance" placeholder="Votre date de naissance" >
          </div>

          <div class="form-group">
          <button type="submit"  name="ajouter" class="btn btn-primary pull-right" value="ajouter" onclick="return checkPassword()"> Ajouter </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>
</body>
<script type="text/javascript">
  function checkPassword() {
    pw1 = document.getElementById("Mdp").value;
    pw2 = document.getElementById("Mdpp").value;
    if (pw1 != pw2) {
      confirm ("\ erreur: les mots de passes ne correspondent pas");
      return false;
    } else {
      return true;
    }

  }

  function surligne(champ, erreur)
  {
     if(erreur)
        champ.style.backgroundColor = "#fba";
     else
        champ.style.backgroundColor = "";
  }

  function veriftaille(taille)
  {
     if(taille.value.length < 3 || taille.value.length > 15)
     {
        surligne(taille, true);
        return false;
     }
     else
     {
        surligne(taille, false);
        return true;
     }
  }

  function verifusernameunique(username){
    var ajax = new XMLHttpRequest();
		var method = "GET";
		var url="AJAX/data.php?text="+username.value;
		var asynchronous = true;
		ajax.open(method, url, asynchronous);
		ajax.send();
		ajax.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				var data = JSON.parse(this.responseText);
				if (data.localeCompare("Not unique") == 0) 
					{
            alert("le nom d'utilisateur doit etre unique");
  					surligne(username, true);
            return false;
					}else{
            surligne(username, false);
            return true;
          }
			}
		}
  }


</script>
<footer class="container-fluid bg-4 text-center">
  <br>
  <p> Omek houreia 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>