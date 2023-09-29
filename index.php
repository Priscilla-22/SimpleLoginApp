<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Simple login page</title>
  </head>
  <body>
    <form >
        <h1>Login</h1>
        <div class="textBox">
            <input type="text" placeholder="username">
        </div>
        <div class="textBox">
            <input type="password" placeholder="password">
        </div>
        <input class="btn" type="submit" value="login">
        <div class="signup">
            Don't have an account?
            <br>
            <a href="#">Sign Up Here</a>
        </div>    
    </form>
  </body>
</html>
<?php
$cmon = mysqli_connect("localhost", "root","");
?>
