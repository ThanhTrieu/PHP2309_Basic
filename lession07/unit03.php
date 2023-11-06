<?php
// xoa bo hoan toan cookie
if(isset($_COOKIE['T3h_Cookie'])){
    unset($_COOKIE['T3h_Cookie']);
    setcookie("T3h_Cookie","",time()-3600,"/","",0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoa cookie</title>
</head>
<body>
    <h3>Xoa cookie</h3>
    <a href="unit02.php"> unit02 (lay gia tri cookie) </a>
</body>
</html>