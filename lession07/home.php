<?php
//require "demo.php";
//include "demo1213.php";

//require_once "demo.php";
include_once "demo.php";

// co the su dung nhung gi cho phep cua thang demo.php
$sum = sumNumber(1,2);
$a = 1;
$b = 2;
echo $a + $b;
echo "<br/>";
echo $sum;
echo "<br/>";
//////////////////////////////////////////////
// 1 bien super global
// $_SERVER : bien kieu mang - chua toan bo thong tin can thiet ben phia server
echo "<pre>";
print_r($_SERVER);
