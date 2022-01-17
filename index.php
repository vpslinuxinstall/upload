<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Upload Files</title>

</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="submit" value="Upload File" name="submit">
    </form>
    <br>
    <!--
    <a href="./uploadphp/uploads.php" >upload content page</a> 
    --> 
    <a href="./directorylister/index.php" >upload content page</a> 


	<script src="upload.js"></script>
</body>

</html>
