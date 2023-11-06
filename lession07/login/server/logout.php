<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
if(isset($_POST['btnLogout'])){
    // xoa session
    if(!empty($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    // xoa cookie
    setcookie('LoginApp','',-1,'/','',0);

    header('Location:../index.php');
}