<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
function loginUser(){
    if(isset($_POST['btnLogin'])){
        $username = trim($_POST['username'] ?? null);
        $username = strip_tags($username);

        $password = trim($_POST['password'] ?? null);
        $password = strip_tags($password);
        if(empty($username) || empty($password)){
            header('Location:../login.php?state=error');
        } else {
            // nguoi dung nhap day du thong tin du lieu
            // can kiem tra du lieu do co ton tai trong file database da luu thong tin cua nguoi dung hay ko
            $fopenFile = fopen('database.txt','r');
            if($fopenFile){
                $data = fread($fopenFile, filesize('database.txt'));
                // filesize: xac dinh kich thuoc cua file
                fclose($fopenFile);
                $data = rtrim($data,'|||');
                // chuyen chuoi thanh mang
                $arrUsers = explode('|||', $data);
                $infoUser = $username.'---'.$password;
                $checkingUser = false;
                foreach($arrUsers as $u){
                    // $u ???
                    if($infoUser === $u){
                        $checkingUser = true;
                        break;
                    }
                }
                if($checkingUser){
                    // dang nhap thanh cong
                    // cho vao trang dashboard
                    $_SESSION['username'] = $username;
                    header('Location../dashboard.php');
                } else {
                    // dang nhap linh tinh
                    // quay ve lai form login
                    header('Location:../login.php?state=fail');
                }

            } else {
                header('Location:../login.php?state=error_file');
            }
        }
    }
}
loginUser();