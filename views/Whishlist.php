<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
}
?>

<html>

  <head>
    <title> whishlist | Omek Houreya </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/cart.css">
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

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Omek Houreya</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li class="active" ><a href="foodlist.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>

              
            <li><a href="whishlist.php"><span class="glyphicon glyphicon glyphicon-heart  "></span> whishlist
              (<?php
              if(isset($_SESSION["whishlist"])){
              $count = count($_SESSION["whishlist"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>



            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    
<?php
if(!empty($_SESSION["whishlist"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your whishlist</h1>
        <p>Looks tasty...!!!</p>
        
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Food Name</th>
<th width="20%">Price Details</th>
<th width="5%">Action</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["whishlist"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["food_name"]; ?></td>
<td> <?php echo $values["food_price"]; ?> DT</td>
<td><a href="whishlist.php?action=delete&id=<?php echo $values["food_id"]; ?>"><span class="text-danger">Remove</span></a></td>
</tr>
<?php 
}
?>

</table>
<?php
  echo '<a href="whishlist.php?action=empty"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Empty whishlist</button></a>&nbsp;<a href="foodlist.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;</a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["whishlist"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your whishlist</h1>
        <p>Oops! We can't smell any food here. Go back and <a href="foodlist.php">add food now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add1"]))
{
if(isset($_SESSION["whishlist"]))
{
$item_array_id = array_column($_SESSION["whishlist"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["whishlist"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["whishlist"][$count] = $item_array;
echo '<script>window.location="whishlist.php"</script>';
}
else
{
echo '<script>alert("Products already added to whishlist")</script>';
  echo '<script>window.location.href = "http://localhost/OmekHoureiaFront/views/Whishlist.php";</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],

);
$_SESSION["whishlist"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["whishlist"] as $keys => $values)
{
if($values["food_id"] == $_GET["id"])
{
unset($_SESSION["whishlist"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="whishlist.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["whishlist"] as $keys => $values)
{

unset($_SESSION["whishlist"]);
echo '<script>alert("whishlist is made empty!")</script>';
echo '<script>window.location="whishlist.php"</script>';

}
}
}


?>
<?php

?>

    </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Omek Houreya 2017 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>