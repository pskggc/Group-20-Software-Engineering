<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        /* text-align: center; */
    }
    input{
        padding: 15px;
        /* border:1px solid red;    */
    }
    button{
        padding:11px;
        width: 80px;
        border-left: 3px solid red;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        /* .5px .5px 20px 5px; */
    }
    #fileToUpload{
        /* border: 1px solid red; */
        padding-left: 0px;
    }
    form{
        margin-left: 4px;
        /* border:1px solid green; */
        /* width: 50%; */
    }
    button:hover{
       box-shadow: 1px 1px 20px 5px white; 
    }
    </style>
</head>
<body> 
   <?php
        include "header.php";
    ?>
    <br>
    <br>
    <form action="upload.php" method="post">
        Select image to upload:
        <hr>
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <button type="submit" value="Upload Image" name="submit">Submit</button> 
        <!-- <input type="submit" value="Upload Image" name="submit">  -->
    </form>
</body>
</html>