

<?php
include "../core/clientc.php";
$error = "";

if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['Mdp'])) {
    $error = "Username or Password is invalid";
  }
    else
  {
    $username=$_POST['username'];
    $password=$_POST['Mdp'];
    $client1c=new clientc();
    $login=$client1c->loginclient($username, $password);


    if (!empty($login))  //fetching the contents of the row
    {

      session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION ['Mdp'] = $_POST['Mdp'];

      header("location: ../"); 
    }
     else 
     {
      $error = "Username or Password is invalid";
    }
  }
}
?>



<html><head>
    <title> Login | Omek Houreia </title>
  <link rel="stylesheet" type="text/css" href="css/managerlogin.css"><link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><script type="text/javascript" src="js/jquery.min.js"></script><script type="text/javascript" src="js/bootstrap.min.js"></script></head>

  
  
  
  

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Omek Houreia</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../">Home</a></li>
            <li><a href="aboutus.php">A propos</a></li>
            <li><a href="contactus.php">Contactez-nous!</a></li>
            <li>
              <a href="reservation.html">Reserver une table</a>
                    </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="ajoutclient.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up  </a>
                
            </li>

            <li><a href="#" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login </a>
              
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
     <h1>Salut!<br> Bienvenu sur <span class="edit"> Omek Houreia </span></h1>
     <br>
   <p> LOGIN pour continuer.</p>
    </div>
    </div>

    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <form action="login.php" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Nom d'utilisateur: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Ecrire le nom d'utilisateur" required="" autofocus="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Mot de passe: </label>
            <div class="input-group">
              <input class="form-control" id="Mdp" type="password" name="Mdp" placeholder="Ecrire le mot de passe" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Ajouter</button>
          </div>

        </div>
        <label style="margin-left: 5px;">ou</label> <br>
       <label style="margin-left: 5px;"><a href="ajoutclient.php">Creer nouveau compte.</a></label>

        </form>
        </div>     
      </div>      
    </div>
    </div>


    

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Omek Houreia 2020 | © All Rights Reserved </p>
  <br>
  </footer>
</body></html>






