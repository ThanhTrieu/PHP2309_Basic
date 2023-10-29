<?php
// kien thuc ve mang trong php
$number = 10; // chi luu dc 1 gia tri tai thoi diem ma no khai bao
// muon 1 bien don co the luu tru dc nhieu gia tri khac nhau ???? ==> dung Array (mang)
// Mang la 1 bien don co the luu tru nhieu gia tri khac nhau
$arrNumber = [1,2,3,4,5,6,7,8,9]; // mang luu tru nhieu cac con so nguyen khac nhau
//var_dump($arrNumber);
$arrNumber2 = array(1,2,3,4,5,6,7,8,9); // dung cho moi phien ban php deu ho tro
// cac phan tu trong 1 mang khong nhat thiet phai cung kieu du lieu voi nhau
$arrNumber3 = ["Apple", true, false, 1,2,3];
// 1 vai khai niem quan trong;
// gia tri cua phan tu nam trong mang (value)
// vi tri cua phan tu nam trong mang (index , key)
// vi tri cua phan tu dau tien trong mang luon luon dc danh la so 0 (khong co vi tri am trong mang)
// truy cap vao 1 phan tu nam trong mang
// cu phap : ArrayName[index];
$apple = $arrNumber3[0];
echo $apple;
echo "<br/>";
// in mang
echo "<pre>";
print_r($arrNumber);
echo "<pre/>";
echo "<br/>";
echo $arrNumber[7];
// mang tuan tu : mang ma vi tri cua cac phan tu dc tu dong tao va sap xep tang dan la cac con so
$arrMyNumber = [1,2,3,4,5,6,7,8,9];
// mang ket hop
$arrInfoStudent = [
    "name" => "Van Teo",
    "age" => 20,
    "email" => "teo@gmail.com"
];
echo "<br/>";
//echo "<pre>";
print_r($arrInfoStudent);
echo "<br/>";
$email = $arrInfoStudent["email"];
//echo $email;
$arrStudents = [
    ["name" => "Teo", "age" => 20],
    ["name" => "Ty", "age" => 22],
    ["name" => "Hoi", "age" => 21],
    10,
    20,
    true
];
//echo "<pre>";
print_r($arrStudents);
//echo "</pre>";


