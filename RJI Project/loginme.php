<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
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
<div>
  
<form action="index.php" method="post">
  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <?php
            if ($error) {
                print "<div class='error' style='background-color:red'>$error</div>\n";
            }
        ?>
    <button type="submit" name= login-submit>Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot<a href="createUser_form.php"> password?</a></span><br>
  </div>
  <div class="signupdiv">
      NO ACCOUNT YET?<a id="signup" href="createUser_form.php" style="color:green"> SIGN UP</a>
  </div>
</form> 
</div>
</body>
</html>
