<?php

    $dbhost = 'group20-mysqldb.cn512p42o9y1.us-east-2.rds.amazonaws.com'; // Your MySQL database hostname on Amazon EC2 (Should be same as mine unless you changed it)
    $dbuser = 'group20'; // Your MySQL database username on Amazon EC2 (Should be same as mine unless you changed it)
    $dbpass = 'group20database'; // Your MySQL database password on Amazon EC2 (Remember this otherwise you will not be able to access your database)
    $dbname = 'group20_database'; //The name of your MySQL database (Should be same as mine unless you changed it
    
    
    $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Print host information
    // echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

        $firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
        $lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
        $email = empty($_POST['email']) ? '' : $_POST['email'];
    
        $sql = "INSERT INTO Users (uidUsers, emailUsers, pwdUsers, fnameUsers,lnameUSers) VALUES ('$username','$email','$password','$firstName', '$lastName')";

    if(mysqli_query($link, $sql)){
    require 'page1.php';
}   else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
    mysqli_close($link);
?>

