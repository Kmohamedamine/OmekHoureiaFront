<?php
session_start();
?>

<html>

  <head>
    <title>Omek Houria </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/contactus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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

    <?php
    require 'navbarviews.php';
    ?>
    <br>

    <div class="heading">
     <strong>Ajouter <span class="edit"> Livraison </span></strong>
     <br>
    
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area" ">
         <form method="POST" action="ajoutlivraison.php">

        
          <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Ajouter Livraison</h3>
                    <div class="form-group ">
                        <label class="control-label" for="success">Saisir l'id client</label>
                        <input type="number" class="form-control" id="success" name="idclient" required="" placeholder="id client"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label" for="warning">saisir l'id livreur</label>
                        <input type="text" class="form-control" id="warning" name="nom" required="" placeholder="id livreur"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label" for="error">saisir l'adresse</label>
                        <input type="text" class="form-control" id="error" name="adresse" required="" placeholder="adresse"/>
                    </div>
          <div class="form-group">
                        <label class="control-label" for="success">Saisir le numero du telephone</label>
                        <input type="number" class="form-control" id="success" name="numtel" required="" placeholder="numero"/>
                    </div>
           <div class="form-group">
                        <label class="control-label" for="warning">saisir le numero de la commande</label>
                        <input type="number" class="form-control" id="warning" name="numcommande" required="" placeholder="commande"/>
                    </div>
                

                    <input type="submit" name="ajouter" value="ajouter" class="btn btn-primary pull-right">
                </form>
        

        
      </div>
    </div>
      
    </div>


     </body>

  <?php
  require 'footer.php';
  ?>
</html>