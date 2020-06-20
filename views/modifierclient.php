
<?PHP

include "../entities/client.php";
include "../core/clientc.php";
$clientc=new clientc();
session_start();
$profil=$clientc->profilclient($_SESSION['username']);
$profil=$profil["0"];
?>

<HTML>
<link rel="stylesheet" type = "text/css" href ="css/myrestaurant.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
<body>




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
          <a class="navbar-brand" href="index.php">Omek houreia</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li>
              <a href="reservation.html">Reserver une table</a>
                    </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            
            <li class="active"> <a href="managerlogin.php">MODIFICATION CLIENT</a></li>
         
          </ul>
        </div>

      </div>
    </nav>



<div class="container">
    <div class="jumbotron">
     <h1>Bienvenue! </h1>
     <p>Modifiez!</p>

    </div>
    </div>
<div class="container">
    <div class="container">
      <div class="col">
        
      </div>
    </div>





<div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">


<form method="POST">
  <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Les informations:</h3>
<!--<table>-->

<caption>Modifier client</caption>




          <div class="form-group">
            <input type="text" class="form-control"  name="nom" placeholder="Votre nouveau Nom" value="<?PHP echo $profil['nom_client']; ?>" onblur="return veriftaille(this);">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="prenom" placeholder="Votre nouveau Prenom" value="<?PHP echo $profil['prenom_client']; ?>" onblur="return veriftaille(this);">
          </div>

          <div class="form-group">
            <input type="Password" class="form-control"  name="Mdp" id="Mdp" placeholder="Votre nouveau Mot de passe"  >
          </div>

          <div class="form-group">
            <input type="Password" class="form-control"  name="Mdpp" id="Mdpp" placeholder="Reecrire votre nouveau mot de passe" >
          </div>



          <div class="form-group">
            <input type="tel" class="form-control"  name="telephone" pattern="(9|5|2|4)[0-9]{7}" placeholder="Votre nouveau numero telephonique" value="<?PHP echo $profil['tel_client']; ?>" required >
          </div>

          <div class="form-group">
            <input type="email" class="form-control"  name="mail" placeholder="Votre nouveau Email" value="<?PHP echo $profil['mail_client']; ?>" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control"  name="addresse" placeholder="Votre nouvelle adresse" value="<?PHP echo $profil['adresse_client']; ?>" >
          </div>

          <div class="form-group">
            <input type="Date" class="form-control"  name="datenaissance" placeholder="Votre date de naissance" value="<?PHP echo $profil['password_client']; ?>" >
          </div>
<!--<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>-->
          <div class="form-group">
          <button type="submit"  name="modifier" class="btn btn-primary pull-right" value="modifier" onclick="return checkPassword()"> Modifier </button>    
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


</script>








<?PHP
if (isset($_POST['modifier'])){
  $client=new client($_POST['nom'],$_POST['prenom'],$_POST['password'],$_POST['telephone'],$_POST['username'],$_POST['mail'],$_POST['adresse'],$_POST['datenaissance']);
  $clientc->modifierclient($client,($_GET['id']));
  header('Location: afficherclient.php');
}
?>
</body>

<footer class="container-fluid bg-4 text-center">
  <br>
  <p> Omek houreia 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>


</HTMl>