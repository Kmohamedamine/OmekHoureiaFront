<?php
include "../core/clientc.php";
$client1c=new clientc();
session_start();
$profil=$client1c->profilclient($_SESSION['username']);
$profil=$profil["0"];

?>

<html>
  <head>

    <title> Home | Omek Houreia </title>
  </head>
 <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
 <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />




  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/profil.css">
  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
  <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/profil.js"></script>-->
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

    <div class="wide">
        <div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/logo.jpg"></div>
        
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Good Food is Good Mood</div>
    </div>
    <br>
<!------ Include the above in your HEAD tag ---------->





<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        




                <div class="form-group">
                    <label class="control-label col-md-2">Image Upload</label>
                    <div class="col-md-9">
                      <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                            <div>
                          <span class="btn btn-primary btn-file">
                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="default" name="image_enseignant">
                          </span>
                          <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                            </div>
                      </div>
                    </div>
                </div>







                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content ml-1" id="myTabContent">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nom:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?PHP echo $profil['nom_client']; ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Prenom:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?PHP echo $profil['prenom_client']; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                    
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Mail:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?PHP echo $profil['mail_client']; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Mot de passe</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?PHP echo $profil['password_client']; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div row="row">
                                          <div class="ml-auto">
                                            <a href="modifierclient.php"><button class="btn btn-primary d-none" value="Modifier profil"> Modifier votre profil</button></a> 
                                          </div>
                                        </div>
                                        <hr />
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  
</body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Food Exploria 2017 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>