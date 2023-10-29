<?php

function ktSNT($number = 0){
    if($number <= 1){
        return false;
    }
    if($number == 2){
        return true;
    }
    for($i = 2; $i <= sqrt($number); $i++){
        if($number % $i == 0){
            return false;
        }
    }
    return true;
}

function kiemTraSoNguyenTo(){
    if(isset($_POST["btnChecking"])){
        $number = $_POST["numberCheck"] ?? null;
        $number = is_numeric($number) ? $number : null;
        if(is_null($number)){
            // nguoi dung co tinh ko nhap so
            // thong bao loi ngay tren giao dien
            header("Location:../songuyento.php?state=error&n={$number}");
        } else {
            // nguoi dung nhap dung so
            if(ktSNT($number)){
                header("Location:../songuyento.php?state=ok&n={$number}");
            } else {
                header("Location:../songuyento.php?state=fail&n={$number}");
            }
        }
    }
}
kiemTraSoNguyenTo();