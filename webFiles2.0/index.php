<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
  <?php
    include 'header.php';
  ?> 
  <br>
  <h2 class="h2">Login</h2>

<form action="/action_page.php">
  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot<a href="createUser_form.php"> password?</a></span><br>
  </div>
  <div class="signupdiv">
      NO ACCOUNT YET?<a href="createUser_form.php"> SIGN UP</a>
  </div>
</form> 
</body>
</html>
