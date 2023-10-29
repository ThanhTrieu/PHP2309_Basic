<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiem Tra SNT</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container{
            max-width: 350px;
            margin: 5px auto;
            border: 1px solid #ccc;
            padding: 20px;
            min-height: 250px;
        }
        .text-title{
            text-align: center;
            margin: 5px 0px;
        }
        input{
            width: 100%;
            height: 28px;
            padding: 4px 2px;
            border-radius: 3px;
        }
        button{
            padding: 8px;
            border-radius: 3px;
            margin: 8px 0px;
        }
    </style>
</head>
<body>
    <?php
        $state  = $_GET["state"] ?? null;
        $number = $_GET["n"] ?? null;
    ?>
    <div class="container">
        <h3 class="text-title">Kiem Tra so nguyen to</h3>
        <form method="post" action="server/checking.php">
            <label for="numberCheck">Moi nhap so can kiem tra</label>
            <input type="text" id="numberCheck" name="numberCheck" value="<?= $number; ?>" />
            <button type="submit" name="btnChecking"> Kiem Tra</button>
        </form>
    </div>
</body>
</html>