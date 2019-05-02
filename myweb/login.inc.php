<?php
if(isset($_POST["login-submit"])){
        handle_login();
    } else {
        login_form();
    }
 //================================= handle_login =================================   
function handle_login() {
        
        require'db.inc.conf';

        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];
        
        
        // Require the credentials
        // require_once '../db.conf';
        
        // // Connect to the database
        // $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // // Check for errors
        // if ($mysqli->connect_error) {
        //     $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        //     require "index.php";
        //     exit;
        // }
        
        // http://php.net/manual/en/mysqli.real-escape-string.php
        // $username = $link->real_escape_string($username);
        // $password = $link->real_escape_string($password);
        
        // //more secure password storing for website
        // $password = sha1($password); 
        
        // Build query
        $query = "SELECT idUsers FROM Users WHERE uidUsers = '$username' AND pwdUsers = '$password'";
        
        // Sometimes it's nice to print the query. That way you know what SQL you're working with.
        //print $query;
        //exit;
        
        // Run the query
        $mysqliResult = $link->query($query);
        
        // If there was a result...
        if ($mysqliResult) {
            // How many records were returned?
            $match = mysqli_num_rows($mysqliResult);

            // Close the results
            $mysqliResult->close();

            // Close the DB connection
            $link->close();

            // If there was a match, login
            if ($match == 1) {
                // $_SESSION['loggedin'] = $username;
                header("Location: fileUpload.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect username or password';
                require "loginme.php";
                exit;
            }
        }
        // Else, there was no result
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "loginme.php";
          exit;
        }
    }
    
    function login_form() {
        $username = "";
        $error = "";
        require "loginme.php";
        exit;
    }
    
?>
 