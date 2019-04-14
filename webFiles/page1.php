<!--The php code was created by Professor Wergles-->
<?php

    //key to prevent URL hacking

    // if a user has logged in, 'username' cookie will set 
    $username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
    
    // if the cookie isn'there, send them back to the login
    if(!$username){
        header("Location: login.php");
        exit;
    }
?>
    

<!DOCTYPE html>
<!--

    name:       Patrick Kunza
    pawprint:   pskggc
    date:       12/03/18

-->
<!-- Created by Professor Wergeles for CS2830 at the University of Missouri -->
<html lang="en">
<head>
	<title>Home</title>
    <meta charset="utf-8">
    <link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet'>
    <link href="app.css" rel="stylesheet" type="text/css">
    
                        
    
</head>
<body>
    
    <?php include 'nav.config'?>
    
    <div class="homeContent">
        <p>Welcome to my webpage, please use the navigation bar above to navigate throughout my site. The job history tab has a collection of all the companies I have worked for starting from 2015. The Resume tab contains my resume and the athletics tab has information pertaining to my athletic career at Mizzou.</p>
    </div>
    <p class="prompt">If you have any further questions please feel free to contact me via email or phone.</br>Phone Number: 314-874-6305</br>Email-address: pskggc@mail.missouri.edu</p>
</body>
</html>
<link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css"><link href="https://snatchbot.me/custom/37880.css" rel="stylesheet" type="text/css"><script src="https://snatchbot.me/sdk/webchat.min.js"></script><script> Init('?botID=37880&appID=webchat', 600, 600, 'https://dvgpba5hywmpo.cloudfront.net/media/image/zzMkoSwKvpr4rPUK6F1EcqiCf', 'bubble', '#00BAFF', 90, 90, 62.99999999999999, '', '1', '#FFFFFF', 0); /* for authentication of its users, you can define your userID (add &userID={login}) */ </script>