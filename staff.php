<?php session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 0){
    header('Location: user.php');
  }
}else{
  header('Location: login.php');
}
?>
<!-- insert navigation bar here-->
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
  <head>
    <title> Staff </title>
  </head>

  <body>

  <header>
<!--MENU Bar-->
    <?php
      require_once('menu.php');
     ?>
    </header>
    <center>
      <br>
      <br>
    <div class = "loginBox" style = "margin-top: 50px;">

    <table style="margin-left 50%;">
      <tr>
        <td style = "width:50%">
          <form method="post" action="addUser.php" style = "border-style:hidden;">
              <button class= "button "type="submit">Add Users</button>
          </form>
        </td>
        </tr>
        <tr>
          <td style = "width:50%">
          <form method="post" action="user-table.php" style = "border-style:hidden;">
              <button class= "button "type="submit">View Users</button>
          </form>

        </td>
      </tr>
    </tr>

      <tr>
        <td style = "width:50%">
          <form method="post" action="addSales.php" style = "border-style:hidden;">
              <button class= "button "type="submit">Add Sales</button>
          </form>
        </tr>
        <tr>
          <td>
          <form method="post" action="sales-table.php" style = "border-style:hidden;">
              <button class= "button "type="submit">View Sales</button>
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form method="post" action="product-table.php" style = "border-style:hidden;">
              <button class= "button "type="submit">View Product</button>
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form method="post" action="booking-table.php" style = "border-style:hidden;">
              <button class= "button "type="submit">View Booking</button>
          </form>
        </td>
      </tr>
    </table>
</div>
</center>
</body>
</html>
