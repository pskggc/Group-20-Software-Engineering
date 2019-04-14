<!--

    name:       Patrick Kunza
    pawprint:   pskggc
    date:       12/03/18

-->
<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri
    
    //set the cookie to expire
    setcookie('username', '', 1);
    
    // redirect the user to login.php which will then load login-form
    header("Location: login.php");

    exit;

    
?>
