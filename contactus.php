
<!DOCTYPE html>
<html>
<head>
    <title>PuppyHouse</title>
    <!--applies style sheet found in css folder-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--applies main style sheet-->
    <link rel="stylesheet" href="css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
    <h1 id="logo"><img src="./images/logo.png" alt="logo" /> Welcome to PuppyHouse</a></h1>
</div>
<!--affixes nav bar to top of the page-->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <!--Drop down menu-->
  <div class="navbar">
  <a id ="link" href="index.php">Home</a>
  <a  id ="link"  href="aboutus.php">About us</a>
  <a  id ="link"  href="blog.php">Blog</a>
  <a  id ="link"  href="contactus.php">Contact Us</a>
  <nav class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text-1">For Puppies<span class="caret"></span></a>
      <div class="dropdown-menu" role="menu" id="text-2">
      <!--Need to add links to the products on amazon later-->
        <a href="#">Clothing</a>
        <a href="#">Accessories</a>
        <a href="#">Kitchenware</a>
      </div>
    </nav>
      <nav class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text-1">For Owners<span class="caret"></span></a>
          <div class="dropdown-menu" role="menu" id="text-2">
              <!--Need to add links to the products on amazon later-->
              <a href="#">Clothing</a>
              <a href="#">Accessories</a>
              <a href="#">Kitchenware</a>
          </div>
  </div>
    <div>
        <a href="cartview.php" class="btn-my-cart" data-checkout="Checkout">
            <span class="fa fa-shopping-cart"></span> My Cart</a>
    </div>
</nav>
  </nav>

</div>
</div >
<nav class = "searchbutton"  style="background:#222831; background-size: contain;" >
    <br>
    <form class="search" action="/action_page.php" style="margin:auto;max-width:500px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <br>
</nav>
<nav style ="background:#393e46">
    <div id = "advertising">
        <img src="./images/ad6.jpg" alt="Nature" class="responsive">
        <hr style="height:2px;border-width:2px;color:#393e46;background-color:#CECECE">
    </div>
</nav>
<!--Insert images to be used on webpage-->
<!--Create cataloge/featured images uses pre-defined bootstrap grid-->
<nav >
    <h2 class="text-center" style="padding:0; font-weight:bold; width:100%; color:#222831; text-align: center;  margin: 1em 0 .6em 0; padding: 24px; ">Contact Us</h2>
</nav>
<br />
<!--Code from DB needs to go here to pull info from cart--->
<div class="row">
    <div class="col-md-6" style="">
        <div class="container" id="Contact-page">
            <form action="#" method="post">
                <div class="form-group">
                    <div class="col-xs-3">
                        <label for="Name" id="Name-label">Name (First and Last):</label>
                        <input type="text" class="form-control" id="name" name="name" />
                        <br />
                        <label for="Email" id="Email-label">Email Address:</label>
                        <input type="text" class="form-control" id="Email" name="Email" />
                        <br />
                        <label for="Text" id="Text-label">Message:</label>
                        <input type="text" class="form-control" id="#message" name="message"/>
			<br>
                        <input type="submit" value="Submit">
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<br>
<div>

<!--Google map embedded--!>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.974795573996!2d-77.95292138409732!3d43.21001797913887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d401eac75a92c9%3A0xd2abb594bb541088!2sThe%20College%20At%20Brockport%20State%20University%20Of%20New%20York!5e0!3m2!1sen!2sus!4v1607486972932!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="padding: 10px 50px; border-style: solid; border-color: black; display: inline; vertical-align: top;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<br>
<!--Insert footer-->
<div style="background-color: #fd7014;">
    <footer class="text-center" id="footer">&copy; Copyright 2020 PuppyHouse. All rights Reserved.
        <br>
        <a href="Privacy_Statement.php" style="font-size: 1em; color: white; " >Privacy Policy</a>
    </footer>
</div>
</div>
</body>
</html>

