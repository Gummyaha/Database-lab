<?php
  session_start();
 ?>

<html>
<head>
  <title> THE CAR: Sign Up </title>
  <link rel="stylesheet" href="main.css"/>
  <link rel="stylesheet" href="model.css"/>
  <header>
<!--MENU Bar-->
      <div class= "container">
        <nav class= "nav">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php">NEWS</a></li>
            <li><a href="index.php">MODELS</a></li>
            <li><a href="Booking.php">BOOKING</a></li>
            <li><a href="index.php">CONTACT US</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
              <li><a href="login.php">LOG OUT
              </a></li>

          </ul>
        </nav>
      </div>
    </header>
  </head>

<body>

<img style="float: right; width:65%; margin-top: 6%;" src="signup-head.png">
<img style="float: left; width: 28.5%; height: auto;" src="signup.png">

<table style="margin-left: 50%; margin-top: 15%;">
  <tr>
      <input type = "hidden" value = "customer">
    <td style="width: 30%;">
      <b><label style="margin-left: 0%;" >First Name:</label></b>
    </td>
    <td >
      <input type="text" placeholder="Enter First Name" name="fname" required>
    </td>
  </tr>

  <tr>
    <td style="width: 30%;">
      <b><label>Last Name:</label></b>
    </td>
    <td>
      <input type="text" placeholder="Enter Last Name" name="lname" required>
    </td>
  </tr>

  <tr>
    <td style="width: 30%;">
      <b><label>Userame:</label></b>
    </td>
    <td>
      <input type="text" placeholder="Enter Username" name="user" required>
    </td>
  </tr>

  <tr>
    <td style="width: 30%;">
      <b><label>Email:</label></b>
    </td>
    <td>
      <input type="text" placeholder="Enter Email" name="email" required>
    </td>
  </tr>
 </table>

<br>
  <input class="button" style="margin-left: 30%" type = "submit"><br>



</body>

</html>