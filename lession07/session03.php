<?php 
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
if(isset($_SESSION["username"]) && isset($_SESSION['email'])){
    // xoa all moi session
   // session_destroy();
   // xoa tung session 
   // unset : xoa bien (giai phong bien khoi bo nho luu tru)
   unset($_SESSION['username']);
   unset($_SESSION['email']);
   header('Location:session02.php');
}