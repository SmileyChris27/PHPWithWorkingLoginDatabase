<!DOCTYPE html>
<html>
<head>
	<title>Final Project</title>
	    <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="main.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<body class="homebg">
	

    <nav class="topnav" id="myTopnav">
          <a href="home.php" class="active">Home</a>
          <a href="Contact.php">Contact</a>
          <a href="Decimal-Binary-Hex.php">Decimal-Binary-Hex</a>
          <a href="WindowsCMD.php">Windows CMD</a>
          <a href="PCHardware.php">PC Hardware Products</a>
          <a href="LinuxTerminal.php">Linux Terminal</a>
          <a href="login.php">Login</a>
          <a href="signup.php">Sign Up</a>
          <a href="cart.php">Cart</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
      </nav>


  <div class="contact-title">
		<h1>Welcome To Smiley Chris's Page</h1>
		<h2>Have some questions? Please email us here.</h2>
	</div>

	<div class="contact-form">
		
		<input name="name" type="text" class="form-control" placeholder="Your Name" required>
		<br>
			
    <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

		<textarea  rows="10" cols="20" name="message" class="form-control" placeholder="Message" required></textarea><br>

		<input type="submit" value="Send Message" class="form-control submit" value="SEND MESSAGE">
  </div>
  
          

<footer>
<div id="Footer">
  <p>&copy; Copyright @ 2020 SmileyChris27</p>
  <a href="https://www.facebook.com/chris.velez.5815"><span>Facebook</span></a> <span class="bar">|</span>
  <a href="http://www.twitter.com/VelezCM93"><span>Twitter</span></a> <span class="bar">|</span>
</div>
</footer>


<script>            
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
  </script>


</body>
</head>
</html>