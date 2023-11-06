<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    require "loginMiddleware.php";
    
    if(!checkUserLogin()){
        header("Location:index.php");
        exit(); // thoat khoi trang truy cap
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
        $username = $_SESSION['user'] ?? null;
    ?>
    <h1> Welcome !</h1>
    <p> Hi <?= $username; ?></p>
    <form method="post" action="server/logout.php">
        <button type="submit" name="btnLogout"> Logout </button>
    </form>
</body>
</html>