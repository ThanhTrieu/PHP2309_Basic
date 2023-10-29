<?php 
// phuong thuc gui du lieu (send data) co ban trong php
// phuong thuc GET and POST
// 1- GET
// $_GET; // super global - bien kieu mang
// method GET se duoc truyen tai du lieu thong qua url cua trinh duyet
// abc.com.vn?id=1&name=trieunt
// ? & : dau hieu nhan biet method GET
// id va name goi la key(index) cua $_GET
// $_GET["id"] va $_GET["name"];
/********************************************************************/
// nhan cac du lieu tu unit02.php gui len
// vi unit02 gui du lieu len bang method get(hien thi bang url) nen dung bien $_GET de lay gia tri ve
$id = $_GET["id"] ?? null; // isset($_GET["id"]) ? $_GET["id"] : null;
$name = $_GET["name"] ?? null; // isset($_GET["name"]) ? $_GET["name"] : null;
$age = $_GET["age"] ?? null;
echo "id = {$id}, name = {$name}, age = {$age}";
echo "<br/>";
/*******************************************************************/
// nhan cac du lieu tu form gui len bang method get
$username = $_REQUEST["username"] ?? null;
$password = $_REQUEST["password"] ?? null;
echo "username = {$username}, password = {$password}";
echo "<br/>";
/*******************************************************************/
// ben phia form unit02.php dung method post dui data len
// thi ben phia unit01.php muon nhan dc data thi dung $_POST
// $_POST: super global - bien kieu mang
// key hay index cua $_POST chinh la gia tri cua thuoc tinh name cua cac phan tu trong  form HTML
// method post : khong hien thi du lieu tren URL
$user = $_REQUEST["username"] ?? null;
$pass = $_REQUEST["password"] ?? null;
echo "user = {$username}, pass = {$password}";