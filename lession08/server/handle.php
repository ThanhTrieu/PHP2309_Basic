<?php
function registerAccount(){
    if(isset($_POST['btnRegister'])){
        $username = trim($_POST['username'] ?? null);
        $username = strip_tags($username);

        $password = trim($_POST['password'] ?? null);
        $password = strip_tags($password);

        $email = trim($_POST['email'] ?? null);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : null;

        $phone = trim($_POST['phone'] ?? null);
        $phone = (is_numeric($phone) && strlen($phone) == 10) ? $phone : null;

        if(empty($username)){
            header('Location:../register.php?state=error_username');
            exit();
        }
        if(empty($password)){
            header('Location:../register.php?state=error_password');
            exit();
        }
        // ghi du lieu vao trong file - file nay da ton tai san tren server
        $fopen = fopen('database.txt','a+');
        // append
        if($fopen){
            $data = $username.'---'.$password.'|||';
            $dataFile = file_get_contents('database.txt');
            //fread($fopen, filesize('database.txt'));
            $dataFile = rtrim($dataFile,'|||');
            $arrUsers = explode('|||', $dataFile);
            $arrUsername = [];
            foreach($arrUsers as $user){
                $arrInfo = explode('---', $user);
                $arrUsername[] = $arrInfo[0];
            }
            $checkUser = false;
            if(in_array($username, $arrUsername)){
                $checkUser = true;
            }
            if(!$checkUser){
                $write = fwrite($fopen, $data);
                fclose($fopen); // dong file
                if($write){
                    header('Location:../login.php');
                } else {
                    header('Location:../register.php?state=error_write_file');
                }
            } else {
                header('Location:../register.php?state=error_exist_username');
            }
        } else {
            header('Location:../register.php?state=error_file');
            exit();
        }
    }
}
registerAccount();