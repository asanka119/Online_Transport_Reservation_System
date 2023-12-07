<!DOCTYPE html>
<html>
<head>
  <title>Cancel Reservation</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--===================Fonts==============================-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/Cancel.css">
  <script src="cancel.js"></script>
  
</head>
<body>
<?php

session_start();
 echo isset($_COOKIE["username"])?$_COOKIE["username"]:"";

 if(isset($_SESSION["username"])){
   //echo "Hello".$_SESSION["memberId"];
 }else{
   //header("location: signin.php");
 }
 
?>
  <header>
    <div class="logo">Quick Ride</div>
    <nav class="nav-bar">
        <ul>
            <li>
                <a href="index.php" >Home</a>
            </li>
            <li>
                <a href="reserve.php" >Book</a>
            </li>
            <li>
                <a href="driverReg.php" >Drive</a>
            </li>
            
            <li>
                <a href="contact.php" >Contact</a>
            </li>
            <li>
                <a href="aboutus.php" >About Us</a>
            </li>
           <!-- <li>
                <a href="signup.html" >Sign Up</a>
            </li>
            <li>
                <a href="signin.html" >Sign In</a>
            </li>-->
            <li id="account">
                <a href="userDashboard.php"><img src="img/user.png" alt="" ></a>
            </li>
        </ul>
    </nav>  
</header>

<h2><u>Cancel Reservation</u></h2><br>
<br>

<div class="Data">
    <form action="cancelRequest.php" method="post">
      <table  width="100%">
	    <tr >
		  <td><label>Enter Your Details Below</label><br><br></td>
		  
		</tr>
        <tr>
          <td><label for="reservationID">Reservation ID :</label>
		  </td>
          <td><input type="text" id="reservationID" name="reserveId" required></td>
        </tr>
        <tr>
          <td><label for="email">Your Email :</label></td>
          <td><input type="text" id="email" name="email" required></td>
        </tr>
        <tr>
          <td><label for="reason">Reason for Cancelation :</label></td>
          <td><textarea id="reason" name="reason" rows="6" cols="25" required></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td>
              <input type="radio" name="terms" required>
              I accept the terms and conditions.
          </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Submit" name="submit"></td>
        </tr>
      </table>
    </form>
  </div>

  <footer>
    <div class="footer-content">
        <div class="footer-logo">Quick Ride <br> <span>Reservations Made Easy</span></div><div class="v1"></div>
        <div class="footer-text">
            <ul>
                <li>FAQ</li>
                <li>Contact Us</li>
                <li>About Us</li>
                <li>Terms and Conditions</li>
            </ul>

            <ul>
                <li>Offers</li>
                <li>Agents</li>
                <li>Routes</li>
                <li>Service Updates</li>
            </ul>

            <ul>
                <li>Have a Question?
                    <br> (+94) 11 111 1111 <br> info@quickride.lk
                </li>
            </ul>

        </div>
    </div>
</footer>
</body>
</html>