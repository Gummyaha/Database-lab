<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
  <head>
    <title> EDIT USER </title>
  </head>

  <body>

  <header>
<!--MENU Bar-->
      <div class= "container">
        <nav class= "nav">
          <ul>
            <li><a href="index.php#home">HOME</a></li>
            <li><a href="index.php#news">NEWS</a></li>
            <li><a href="index.php#models">MODELS</a></li>
            <li><a href="index.php#contact">CONTACT US</a></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li><a href="login.php">
              LOG OUT
              </a></li>

          </ul>
        </nav>
      </div>
    </header>
    <center>
      <label style = "font-size: 30;">ADD USER<label>
    <table style = "border-style: groove">
      <tr>
        <form action="add.php" method = "post">
          <input type = "hidden" value = "customer">
        <td style="width: 30%;">
          <b><label>First Name:</label></b>
        </td>
        <td>
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
      <input type = "submit">
    </form>
  </center>
</body>
</html>