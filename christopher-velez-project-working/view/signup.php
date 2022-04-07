<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/css/signup.css">
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
    <link rel="stylesheet" type="text/css" href="view/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Login Form</title>
</head>
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


<div class="container">
		<img src="view/images/icon.png"/>
			<form>
        <div class="form-input">
          <?php
           /*if(!isset($name)) $name='';
              echo "<input type='text' name='text' value='$name' placeholder='Enter Name'>";*/
          ?>
        </div>
				<div class="form-input">
          <?php
            if(!isset($user)) $user='';
              echo "<input type='text' name='username' value='$user' placeholder='Enter the User Name'/>";
          ?>
				</div>
        <div class="form-input">
        <?php
        /*  if(!isset($email)) $email='';
            echo "<input type='text' name='text' value='$email' placeholder='Enter Email'>";*/
        ?>
        </div>
		<div class="form input">
      <?php
        if(!isset($pass)) $pass='';
          echo "<input type='password' name='password' value'$pass' placeholder='Password' required/>";
      ?>
		</div>
    <div class="form input">
      <?php
   /*     if(!isset($pass2)) $pass2='';
          echo "<input type='password' name='password' value='$pass2' placeholder='Re Enter Password'/>" */
      ?>
    </div>
		<input type="submit" value="Login" onclick="mylink()" class="btn-login"/>
		<input type="submit" value="Register" class="btn-signup"/>

    <input type='hidden' name='choice' value='register' />
<?php
  if(isset($_GET['message'])) echo "<div style='color:red;width:330px'>".$_GET['message']."</div>";
  if(isset($message)) echo "<div style='color:red;width:330px'>".$message."</div>";
  ?>


</form>
  



    <footer class="footer-content">
        <p><span class="bg" color:red;>@2020 SmileyChris27</span></p>
        <a href="https://www.facebook.com/chris.velez.5815"><span>Facebook</span></a> <span class="bar">|</span>
        <a href="http://www.twitter.com/VelezCM93"><span>Twitter</span></a> <span class="bar">|</span>
    </footer>
</div>


  <script>            
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }

        function mylink() {
          window.location.assign("login.php");
        }

</script>


  </script>




</body>
</html>
