<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="uploadimg.php" method="post" enctype="multipart/form-data">
    <label>Select Image File to Upload:</label>
    
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload"><br>
    

</form>
<form action="displayimg.php" method="post" enctype="multipart/form-data">
    <label>Displaying images present in the database:</label>
    
    <input type="submit" name="submit2" value="Display images">

</form>
</body>
</html>

