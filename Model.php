<?php
  session_start();
 ?>

<html>

<link rel="stylesheet" href="Model2.css"/>

  <head>
    <title> THE CAR : Models </title>
  </head>

  <header>
    <div class= "container">
      <nav class= "nav">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php">NEWS</a></li>
            <li><a href="#models">MODELS</a></li>
            <li><a href="Booking.php">BOOKING</a></li>
            <li><a href="index.php">CONTACT US</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="login.php">
              <?php if(isset($_SESSION["user"])){
                echo "LOG OUT";
              }else{
                echo "LOG IN";
              }
              ?>
            </a></li>

        </ul>
      </nav>
    </div>
  </header>

  <body>
    <div class="Name-Head" style="margin: 10% 15% 5% 10%;">
      <h1> The XXX </h1>
    </div>

<br>

<h3 style="margin: 0% 5% 1% 10%" >Properties</h3>
    <table style="margin: 0% 5% 2% 10%">
      <tr>
        <td class="head">Length</td>
        <td class="detail"> xxx mm</td>
        <td class="right-hand" rowspan="5"> Car image</td>
      </tr>
      <tr>
        <td class="head">Width</td>
        <td class="detail"> xxx mm</td>
      </tr>
      <tr>
        <td class="head">Height</td>
        <td class="detail"> xxx mm</td>
      </tr>
      <tr>
        <td class="head">Displacement</td>
        <td class="detail"> xxx cc</td>
      </tr>
      <tr>
        <td class="head">Max speed</td>
        <td class="detail"> xx km/h </td>
      </tr>
      <tr>
        <td class="head">Acceleration</td>
        <td class="detail"> xx-xx km/h </td>
        <td class="right-hand" style="margin-left: 15%;">
          <button id="silver" class="colorbutton">  </button>
          <button id="black" class="colorbutton">  </button>
          <button id="white" class="colorbutton">  </button>
        </td>
      </tr>

    </table>


    <p style="margin-left: 10%;">Price: XX,XXX,XXX Baht</p>
    <br>

    <center>
      <button class="button">Booking</button>
      <br>
      <br>
      <br>

      <h3>COMMENT</h3>
      <textarea style="margin:0% 0% 3% 0%;" rows="6" cols="50">comment here...</textarea>
      <br>
      <button class="button" style="margin:0% 0% 0% 13%;">Comment</button>

    </center>
    <br>


  </body>

</html>
