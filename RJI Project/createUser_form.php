<!DOCTYPE html>
<html>
<head>
	<title>Create User Account</title>
	<link href="app.css" rel="stylesheet" type="text/css"> 
     <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="signup.css">
    <script>
        $(function(){
            $("input[type=submit]").button();			
        
        });
    </script>
</head>
<body>
    <?php
        include 'header.php'
    ?>
    <br>
    
        <!-- =======================form2========================== -->

<form action="connect2.php" method="POST" >
  <div class="container_div">
    <h1>Create your Account</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstName">First name:</label>
    <input type="text" id="firstName" name="firstName" placeholder="Enter First Name" required>
    
    <label for="lastName">Last name:</label>
    <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name" required >

    <label for="username">User name:</label>
    <input type="text" id="username" name="username" placeholder="Enter User Name" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter Password" required>

    <label for="confirmPass">Confirm Password:</label>
    <input type="password" id="confirmPass" name="confirmPass" placeholder="confirm Password" required>

    <label for="email">University Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter Email" required><br>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>