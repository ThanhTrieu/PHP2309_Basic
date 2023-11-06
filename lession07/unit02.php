<?php
// nhan lay gia tri cookie dc thiet lap
// su dung super global $_COOKIE
// $_COOKIE la bien kieu mang
$myCookie = $_COOKIE['T3h_Cookie'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h3>Gia tri cookie la: <?= $myCookie; ?></h3>
    <a href="unit01.php"> unit01.php</a>
    <br/>
    <a href="unit03.php">unit03.php (xoa cookie)</a>
</body>
</html>