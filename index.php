<?php
session_start();
?>

<html>

  <head>
    <title> Home | Omek Houreia </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="views/css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="views/css/index.css">

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
      require "views/navbarindex.php";
      ?>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="views/images/logo.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Good Food is Good Mood</div>
    </div>
    <br>
    <!--<center><img src="views/images/orderimg.png" alt="image" height="50%"></center>-->
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>

    <div class="col-xs-12 line"><hr></div>
    <div class="wide2">
        <div class="col-xs-4 box">
          <img src="views/images/minimumx.png" height="200px">
        </div>
        <div class="col-xs-4 box">
          <img src="views/images/locationx.png">
        </div>
        <div class="col-xs-4 box">
          <img src="views/images/deliveryx.png">
        </div>

        <div class="col-xs-4 box">
          <h2><strong>NO MINIMUM<br> ORDER <br> </strong><hr> </h2>
          <h4>Order any amount<br> you want - no<br> restrictions</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>LIVE ORDER<br> TRACKING <br> </strong><hr> </h2>
          <h4>Know where your<br> order is at any time</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>SUPERFAST<br> DELIVERY <br> </strong><hr> </h2>
          <h4>Hot food delivered to<br> your doorstep</h4>
        </div>
    </div>

     <div class="col-xs-12 line"><hr></div>

     <div class="paragraph1">
     <h1>Welcome to OMEK HOUREIA</h1>
    <p><br> 
      <h4>Remember last time when you had close guest from <font color="green"><strong>Mangalore</strong>, <strong>Kerala</strong>, <strong>Chennai</strong></font> announcing their surprise visit to your sweet home. Which is the follwed by sincere requests like let's have the <font color="green"><strong>famous biriyani of Chennai</strong>.</font> While someone is asking to eat Kallumakkaya Fry from <font color="green"><strong>Calicut in Kerala</strong>.</font> God they blurted as if the prime purpose was to taste the food than to see the well being of you. Well we know its not like they love to get pampered by you.
    </p>
    <p>
      Well whatever the shower love on us, we believe Athiti devo bhave... Right as always</h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
     <h1>FOOD EXPLORIA - Good Food is Good Mood</h1>
    <p><br> 
      <h4>
      Omek Houreia will help in making your quest for enjoying good lunch, dinner which is are home delivered all the more interesting and excited when you are scartching your head to entertain your guest with their demands met.
      </h4>
    </p>
    <p>
      <h4>
        There are two ways you can <font color="green"><strong>order food online</strong></font> with us. <font color="green"><strong>Download Omek Houreia app on your smartphone</strong></font> or open our user friendly website and get it home delivered. Or if you are busy in your schedule and just want to eat at leisure at home you can order takeaway from host of restaurants and pickup the food parcel kept ready for you while you are on the way to home.
      </h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
          <h1>HOW TO ORDER?</h1>
          <p>
            <h4>
              All it takes is 3 easy steps:
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT YOUR CITY AND AREA OF DELIVERY</u>
            </h3>
          </p>
          <p>
            <h4>
              A list of restaurants is displayed that can deliver your food order to your home.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT YOUR RESTAURANT</u>
            </h3>
          </p>
          <p>
            <h4>
              You select as per your choice of restaurant from the list serving <font color="green"><strong>cuisines like Italian, Chinese dishes, Hyderabadi, North Indian,</strong></font> Burgers or Desserts like Ice-cream or Cakes.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>CHOOSE YOUR DISHES AND PAY ONLINE/OFFLINE</u>
            </h3>
          </p>
          <p>
            <h4>
              Once Restaurant is finalised then you browse the restaurants see its reviews, and then Menu. Click on the dishes you have been waiting to enjoy and they get added to the cart automatically.
            </h4>
          </p>
          <p>
            <h4>
              That’s all once everything is in order hit on the checkout and pays online or cash on delivery, choose the way you want we accept all major credit cards or pay cash on delivery. <font color="green"><strong>You can order food online in cities and areas like Mangalore, Chennai, Kerala and very soon in Mumbai, Bangalore and Pune.</strong></font>
            </h4>
          </p>
          <br>
          <p>
            <h4>
              Yes, Omek Houreia is another way to live life with our loved ones...
            </h4>
          </p>
      </div>

        <script type="text/javascript" src="views/js/jquery.min.js"></script>
  <script type="text/javascript" src="views/js/bootstrap.min.js"></script>
  
</body>


      <?php
      require "views/footer.php";
      ?>

</html>