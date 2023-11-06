<?php
// khoi dong session
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

// tao session
// super global $_SESSION, bien kieu mang luu tru tat ca cac thong tin ve session
$_SESSION['username'] = 'trieunt';
$_SESSION['email'] = 'trieunt@gmail.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h3> Session php</h3>
    <a href="session02.php"> session02.php </a>
</body>
</html>