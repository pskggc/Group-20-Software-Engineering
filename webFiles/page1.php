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
        
    }
    #fileToUpload{
        /* border: 1px solid red; */
        padding-left: 0px;
    }
    </style>
</head>
<div>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:<br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
    
        <input type="submit" value="Upload Image" name="submit">
        
    </form>
</div>
</body>
</html>