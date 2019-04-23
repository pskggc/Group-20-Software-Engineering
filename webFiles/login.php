<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

    // Here we are using sessions to propagate the login
    // http://us3.php.net/manual/en/intro.session.php

    // HTTPS redirect
//     if ($_SERVER['HTTPS'] !== 'on') {
//      $redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//      header("Location: $redirectURL");
//      exit;
//  }

    // http://us3.php.net/manual/en/function.session-start.php
    if(!session_start()) {
        // If the session couldn't start, present an error
        header("Location: error.php");
        exit;
    }
    
    
    // Check to see if the user has already logged in
    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
    
    if ($loggedIn) {
        header("Location: page1.php");
        exit;
    }
    
    
    $action = empty($_POST['action']) ? '' : $_POST['action'];
    
    if ($action == 'do_login') {
        handle_login();
    } else {
        login_form();
    }
    
    function handle_login() {
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];
        
        
        // Require the credentials
        require_once '../db.conf';
        
        // Connect to the database
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // Check for errors
        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
            require "index.php";
            exit;
        }
        
        // http://php.net/manual/en/mysqli.real-escape-string.php
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        
        //more secure password storing for website
        $password = sha1($password); 
        
        // Build query
        $query = "SELECT idUsers FROM users WHERE uidUsers = '$username' AND pwdUsers = '$password'";
        
        // Sometimes it's nice to print the query. That way you know what SQL you're working with.
        //print $query;
        //exit;
        
        // Run the query
        $mysqliResult = $mysqli->query($query);
        
        // If there was a result...
        if ($mysqliResult) {
            // How many records were returned?
            $match = $mysqliResult->num_rows;

            // Close the results
            $mysqliResult->close();
            // Close the DB connection
            $mysqli->close();


            // If there was a match, login
            if ($match == 1) {
                $_SESSION['loggedin'] = $username;
                header("Location: page1.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect username or password';
                require "index.php";
                exit;
            }
        }
        // Else, there was no result
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "index.php";
          exit;
        }
    }
    
    function login_form() {
        $username = "";
        $error = "";
        require "index.php";
        exit;
    }
    
?>