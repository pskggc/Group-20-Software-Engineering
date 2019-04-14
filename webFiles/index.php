<!DOCTYPE html>
<!--

    name:       Patrick Kunza
    pawprint:   pskggc
    date:       12/03/18

-->
<!-- Created by Professor Wergeles for CS2830 at the University of Missouri -->
<html lang="en">
<head>
	<title>Patrick Kunza</title>
    <meta charset="utf-8">
    <link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet'>
    <link href="app.css" rel="stylesheet" type="text/css">
    
</head>
<body id="loginForm">
    <div id="loginWidget" class="ui-widget">
        <h1 class="ui-widget-welcome">Welcome</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }else{
                print "<div class=\"prompt\">Please enter your username and password below</div>\n";
            }
        ?>
        
        <form action="login.php" method="post">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" class="submit" value="Submit">
                <input type="submit" class="submit" value="Sign up">
            </div>
        </form>
    </div>
    <div class="publicInfo">
        <p>Hello, and welcome to our image classification web site, Deep Learning. This application was created by Patrick Kunza, Austin Ibeh and Jay Whang. With this tool, University of Missouri RJI users are able to upload images and check if that image is good or bad. This product is in the beta stage of development and we hope to launch the full service soon. We hope you enjoy Deep Learning and that this application meets your expectations.</p>
    </div>
</body>
</html>
