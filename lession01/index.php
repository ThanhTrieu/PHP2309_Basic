<?php
echo "Hi you";
// localhost/lession01/
// index.php : file mac dinh chay neu ton tai
echo "<br/>";
/*
* cu phap comment tren nhieu dong
* comment: trinh thong dich se bo qua ma lenh(code) nay va khong thuc thi
*/
/*
* Khai niem BIEN trong php
* BIEN: la noi luu tru gia (may tinh se cap phat vung nho de luu tru gia tri)
*/
// mot so cac ky thuat(cu phap) khai bao 1 bien trong php
// mot bien trong php luon luon bat dau bang ky tu $
// ten bien cua php khong bat dau bang con hay la khoang trang
$myName = 'Teo'; // mot bien hop le trong php
//$1myAge = 20; // bien khong hop le
//$ myEmail = 'teo@gmail.com'; // bien khong hop le
$_myAddress = 'Ha Noi'; // hoan toan hop le
// Trong ngon ngu lap trinh php : khong quy dinh san kieu du lieu cho bien - kieu du kieu cua bien se duoc tu dong nhan khi bien do dc gan 1 gia tri cu the.
// Bien trong php se phan biet chu hoa va chu thuong
$myLove = 'A';
$myLove = 'B'; // thay doi gia tri cua bien
$MyLove = 'A'; // khong nen khai bao
// day la 2 bien khac nhau hoan toan
// hang so trong php - Viet hoa cac tu cach nhau dau gach duoi
// hang so: gia tri cua no se khong thay
const PI = 3.14; // hang so
define('MY_PI', 3.14); // hang so
//PI = 3.15; // sai - khong duoc phep thay doi gia tri cua hang so
echo "<br/>";
echo PI; // hien thi gia tri;
