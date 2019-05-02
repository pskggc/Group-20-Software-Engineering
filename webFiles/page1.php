<!--The php code was created by Professor Wergles-->
<?php

    //key to prevent URL hacking

    // Every time we want to access $_SESSION, we have to call session_start()
    if(!session_start()) {
        header("Location: error.php");
        exit;
    }
    
    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
    if (!$loggedIn) {
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
    <div class="uploadBox">
        <form action="uploads.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <div class="uploadButton">
            <button type="submit" name="submit">Upload</button>
        </div>
        </form>
    </div>
</body>
</html>