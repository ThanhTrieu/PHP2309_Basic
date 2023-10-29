<?php 
// declare function
var_dump(kiemTraChanLe(3)); // goi ham nay truoc ca khi no dc dinh nghia
echo "<br/>";
function kiemTraChanLe($n){
    //return $n % 2 == 0;
    if($n % 2 == 0){
        return true;
    }
    return false;
}
// lambda function hoac Anonymous functions
$tongHaiSo = function($a, $b){
    return $a + $b;
};
echo $tongHaiSo(1,2); // ten ham chinh la 1 bien
echo "<br/>";

$number = 10; // bien global
function phuongTrinhBacNhat($a, $b){
    global $number; // su dung bien global ben ngoai ham(luu y: khai dau tien nhat trong ham va co tu khoa global dung truoc)
    $number2 = 9; // bien cuc bo(chi hoat dong noi bo trong ham thoi)
    return (-$b/$a) + $number + $number2;
    // ban than tat ca nhung dong lenh nam trong body function : se hieu la o dang cuc bo - no chi hoat dong trong pham vi cua ham
}

$n = 100; // bien toan cuc(global)
$tongBaSo = function($a, $b, $c){
    global $n; // ??? == 100
    return $a + $b + $c + $n;
};
$tongBonSo = function($x, $y, $z, $d) use ($n) {
    return $x + $y + $z + $d + $n;
};
echo "<br/>";
var_dump($tongBaSo(1,2,3));
echo "<br/>";
var_dump($tongBonSo(1,2,3,4));

////// Tham chieu va Tham tri trong function php
// 1 - tham tri: tham so truyen ham, khong bi thay doi theo logic trong ham khi di ra khoi ham
// 2 - tham chieu(tham bien): tham so truyen vao ham bi thay doi theo logic o trong ham khi di ra khoi ham
echo "<br/>";
$testThamTri = 10;
function thamTri(&$test){
    $test += 100;
    echo $test;
    echo "<br>";
}
echo "truoc khi truyen vao ham : {$testThamTri}";
echo "<br/>";
thamTri($testThamTri);
echo "Sau khi truyen vao ham : {$testThamTri}";
echo "<br/>";
// tim hieu tu khoa static trong function
function demoKeywordStatic(){
    static $count = 0;
    // keyword static: giup luu lai gia tri cua bien trong ham, sau moi lan goi ham ra su dung
    $count++;
    echo " value of {$count}";
    echo "<br/>";
}
demoKeywordStatic(); // 1
demoKeywordStatic(); // 2
demoKeywordStatic(); // 3