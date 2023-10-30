<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <?php
        $state = trim($_GET['state'] ?? null);
        $nameFile = trim($_GET['name'] ?? null);
        define('UPLOAD_PATH', "server/uploads/");
    ?>

    <h3> Upload file with PHP</h3>

    <?php if($state === 'error'): ?>
        <p style="color:red"> Vui long chon file </p>
    <?php endif; ?>

    <?php if($state === 'type_file_error'): ?>
        <p style="color:red"> Dinh dang file khong dung, chi cho phep upload anh png,jpeg,jpg </p>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" action="server/upload.php">
        <label> Moi chon file de upload</label>
        <input type="file" name="file" />
        <br/><br/>
        <button type="submit" name="btnUpload">Upload</button>
    </form>
    <?php if($state === 'ok' && !empty($nameFile)): ?>
        <img src="<?= UPLOAD_PATH.$nameFile ?>" />
    <?php endif; ?>
</body>
</html>