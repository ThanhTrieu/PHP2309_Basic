<?php
define("UPLOAD_PATH", "uploads/");

function uploadMultiFile(){
    if(isset($_POST['btnUpload'])){
        if(!empty($_FILES['file']['name'])){
            // kiem tra co upload file len
            // dem so luong file up len
            $countFile = count($_FILES['file']['name']);
            $checking = true;
            for($i = 0; $i < $countFile; $i++){
                // lay ra ten lan luot cua tung file
                $nameFile = basename($_FILES['file']['name'][$i]);
                $tmpFile  = $_FILES['file']['tmp_name'][$i];
                if( !move_uploaded_file($tmpFile, UPLOAD_PATH . $nameFile) ){
                    $checking = false;
                    break;
                }
            }
            if($checking){
                header("Location:../unit02.php?state=oke");
            } else {
                header("Location:../unit02.php?state=something_fail");
            }
        } else {
            // nguoi dung khong chon file 
            header("Location:../unit02.php?state=error");
        }
    }
}
uploadMultiFile();