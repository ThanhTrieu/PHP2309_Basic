<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
function checkUserLogin(){
    if(empty($_SESSION["user"]) || empty($_COOKIE['LoginApp'])){
        return false;
    }
    return true;
}
function checkLogin(){
    if(!empty($_SESSION['user'])){
        return true;
    }
    return false;
}