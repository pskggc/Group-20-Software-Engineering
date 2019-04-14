<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	/*
		This script does one of 3 things:
			1. If the user is visiting for their first time, present a login form
			2. If the login was submitted, process the credentials (username/password)
				Success = Set a cookie and redirect to page1.php
				Failure = Present the login form again with an error
			3. If the user is already logged in, redirect them to page1.php
	*/

    $username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

    // If the user is logged in, redirect them home
    if ($username) {
        header("Location: page1.php");
        exit; //stop the script if the user has already logged in!
    }
    
    // Pull out "action" value from $_POST
    $action = empty($_POST['action']) ? '' : $_POST['action'];
    
    if ($action == 'do_login') {
        // If the action is "do_login", then the form was submitted
        handle_login();
    } else {
        // Else, the form wasn't submitted, so present the login
        login_form();
    }
    
    function handle_login() {
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];
        
        //Check the username and password 
        if($username == 'test' && $password == 'pass'){
            //if they match, set and send the user to page1.php
            setcookie('username', $username);
            header("Location: page1.php");
            exit;
        }else{
            $error = "error: Incorrect Username and password";
            require "index.php";
        }
    }
    
    
    function login_form() {
        $username = "";
        $error = "";
        require "index.php";
    }
?>
