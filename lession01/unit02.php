<?php
// trong php - khong quy dinh san kieu du lieu cho bien
// kieu du lieu cua bien se duoc nhan khi bien do dc gan 1 gia tri cu the.
// Cac kieu du lieu co ban trong php
// 1 - kieu integer : Z (...-2,-1,0,1,2,3)
// Ho tro tat ca cac kieu so nguyen trong cac he co so dem khac nhau
$number = 10; // bien nay co kieu du lieu la so nguyen
var_dump($number); // ham var_dump: giup hien kieu du lieu va gia tri cua bien
// 2 - kieu float - double (kieu so thuc real number)
$number2 = 10.101;
echo "<br/>";
var_dump($number2);
echo "<br/>";
// 3 - kieu du lieu boolean (kieu du lieu logic)
// kieu du lieu nay chi nhan 2 gia tri true or false
$checking = true;
$checking2 = false;
var_dump($checking);
// 4 - null
// bien do dc khai bao nhung chua he dc cap phat bo nho de luu tru du lieu
// khi bien duoc gan la NULL thi chuong trinh may tinh se tu dong hieu la bien do chua dc ton tai;
$test = null;
$test2 = "";
$test = '';
$test = 100;
//$test3; khong dinh nghia bien nhu the nay trong php
// luon luon gan gia cho bien de no nhan kieu du lieu
echo "<br/>";
var_dump($test);