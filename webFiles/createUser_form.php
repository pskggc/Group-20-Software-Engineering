<!DOCTYPE html>
<html>
<head>
	<title>Create User Account</title>
	<!-- <link href="app.css" rel="stylesheet" type="text/css"> -->
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
    <!-- <div id="loginWidget" class="ui-widget">
        <h1 class="ui-widget-header">Create your Account</h1> -->
        
        <?php
            // if ($error) {
            //     print "<div class=\"ui-state-error\">$error</div>\n";
            // }
        ?>
        
        <!-- <form name="nicksForm" action="createUser.php" method="POST" >
            
            <input type="hidden" name="action" value="do_create">
            
            <div class="stack">
                <label for="firstName">First name:</label>
                <input type="text" id="firstName" name="firstName" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <label for="lastName">Last name:</label>
                <input type="text" id="lastName" name="lastName" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <label for="confirmPass">Confirm Password:</label>
                <input type="password" id="confirmPass" name="confirmPass" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <label for="email">University Email:</label>
                <input type="email" id="email" name="email" class="ui-widget-content ui-corner-all">
            </div>
            
            
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form> -->
        <!-- =======================form2========================== -->

<form action="connect2.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
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
    
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me


    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>