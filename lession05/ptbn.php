<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giai PTBN</title>
</head>
<body>
    <?php
        $state  = $_GET["state"] ?? null;
        $result = $_GET["result"] ?? null;
        $hsa = trim($_GET["a"] ?? null);
        $hsb = trim($_GET["b"] ?? null);
    ?>
    <h4> Giai PTBN</h4>

    <?php if($state === 'error'): ?>
        <p style="color:red"> Vui long nhap du cac he so</p>
    <?php endif; ?>
    <?php if($state === 'fail'): ?>
        <p style="color:red"> Vui long nhap so</p>
    <?php endif; ?>

    <form action="server/giaiptbn.php" method="post">
        <div>
            <label for="hsa">He so a</label>
            <input type="text" id="hsa" name="hsa" value="<?= $hsa; ?>" />
        </div>
        <br/>
        <div>
            <label for="hsb">He so b</label>
            <input type="text" id="hsb" name="hsb" value="<?= $hsb; ?>" />
        </div>
        <button type="submit" name="btnGiaiPT"> Giai PT</button>
        <?php if($state === 'success'): ?>
            <div>
                <p>nghiem la : 
                    <input type="text" value="<?= $result; ?>" disabled />
                </p>
            </div>
        <?php endif; ?>
    </form>
</body>
</html>