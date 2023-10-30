<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload multi File</title>
</head>
<body>
    <h3> Upload multi file with PHP</h3>
    <form method="post" enctype="multipart/form-data" action="server/uploadMultiFile.php">
        <label> Moi chon file de upload</label>
        <input type="file" name="file[]" multiple />
        <br/><br/>
        <button type="submit" name="btnUpload">Upload</button>
    </form>

</body>
</html>