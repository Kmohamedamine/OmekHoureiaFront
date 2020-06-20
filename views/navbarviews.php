<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Omek Houreia</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
<li><a href="views/reservation.html">Reserver une table</a>
                    </li>
          </ul>

<?php
if (isset($_SESSION['username'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['username']; ?> </a></li>
            <li><a href="profile.php"><span class="glyphicon glyphicon-cutlery"></span> Profil </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
} else {
  ?>
<ul class="nav navbar-nav navbar-right">
            <li><a href="ajoutclient.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span ></span> </a>
                
            </li>

            <li><a href="login.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span ></span></a>
              
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>