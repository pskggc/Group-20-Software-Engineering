<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri 
    $dbhost = 'ec2-52-14-244-154.us-east-2.compute.amazonaws.com:22'; // Your MySQL database hostname on Amazon EC2 (Should be same as mine unless you changed it)
    $dbuser = 'ec2-user'; // Your MySQL database username on Amazon EC2 (Should be same as mine unless you changed it)
    $dbpass = 'group20database'; // Your MySQL database password on Amazon EC2 (Remember this otherwise you will not be able to access your database)
    $dbname = 'group20'; //The name of your MySQL database (Should be same as mine unless you changed it
    
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    
    print "Connected! Status:" . $mysqli->host_info . "\n";
    
    


    // $row = $result->fetch_assoc();
//     print_r($row);
// 
//     while($row = $result->fetch_assoc()) {
//         print 'I have ' . $row['quantity'] . ' ' . $row['name'] . ' for $' . $row['cost'];
//         print "<br>\n";
//     }
    

    $result->close();
    $mysqli->close();
?>