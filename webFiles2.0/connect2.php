<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect('ec2-52-14-244-154.us-east-2.compute.amazonaws.com', 'ec2-user', 'group20database','group20');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
 
// Close connection
mysqli_close($link);
?>

 <?php
// Created by Professor Wergeles for CS2830 at the University of Missouri 

    // $dbhost = 'ec2-52-14-244-154.us-east-2.compute.amazonaws.com'; // Your MySQL database hostname on Amazon EC2 (Should be same as mine unless you changed it)
    // $dbuser = ‘ec2-user’; // Your MySQL database username on Amazon EC2 (Should be same as mine unless you changed it)
    // $dbpass = 'group20database'; // Your MySQL database password on Amazon EC2 (Remember this otherwise you will not be able to access your database)
    // $dbname = 'group20'; //The name of your MySQL database (Should be same as mine unless you changed it
?> 