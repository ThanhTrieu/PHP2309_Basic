<?php
// cac cau truc dieu kien va cac vong lap trong php
// 1: if
// 2: if ...else
// 3: if ... else if
$month = 11;
if($month == 10) {
    // == : toan tu so sanh(chi so sanh ve mat gia tri)
    // $month == 10 : bieu thuc, bieu thuc nay co the la sai hoac dung. Neu bieu thuc co ket qua la dung thi se thuc thi cac lenh ben trong if. Neu bieu thuc co ket qua la sai thi no se khong thuc thi cac lenh ben trong if
    echo "OK"; // tap hop cac lenh cua if
}
// if: tu khoa trong LT (hoc thuoc long)
// () : khai bao cac bieu thuc dieu kien cho if
// { : start block - bat dau mot khoi lenh
// } : end block - ket thuc khoi lenh
// noi dung ben trong cua cap the mo va dong {} : body content
if($month == 11){
    echo "OK";
} else {
    echo "Not OK";
}

if($month <= 8){
    // do something
} elseif($month == 9){
    // do something
} elseif($month == 10){
    // do something
} else {
    // do something ???
}

// switch ... case
switch($month) {
    case 1: // chi hieu $month == 1
        // do something
        break; // thoat khoi case dang quan ly va thoat khoi su quan ly cua switch
    case 2: // chi hieu $month == 2
        // do something
        break;
    default:
        // do something
        break;
}
echo "<br/>";
$checking = false;
if($checking === ""){
    echo "Yes";
} else {
    echo "No";
}
echo "<br/>";
$n = 10;
$m = "9";
// $m : kieu du lieu string
// $m: gia tri thi hieu no la number string(trong chuoi chi chua gia tri la cac con so duoi dang integer hoac float)
$k = $n * $m; // bao loi ngay C# hay Java hay C/C++ trong PHP khong bao loi cho phep thuc thi
var_dump($k);
var_dump($m);
var_dump($n);
// echo : keyword hien thi du lieu
// var_dump: no goi la ham(function) hien thi va kiem tra kieu du lieu
echo "<br/>";
/*********** Cac vong lap co ban trong php ************/
// 1 - for
for($i = 0; $i <= 9; $i++){
    echo $i; // in lan luot tat ca cac so tu 0 - 9
    echo "<br/>";
}
// in ra cac so chan tu 1 toi 10;
for($i = 1; $i <= 10; $i++){
    if($i % 2 == 0){
        echo "So chan la {$i}";
        echo "<br/>";
    }
}
// 2 - while : vong lap kiem tra dieu kien truoc - dieu kien truyen vao vong lap while neu ma no dung thi moi thuc thi cac vong lap va nguoc lai
// so lan lap cua vong lap while 0 -> vo cung
$j = 1;
while($j < 10){
    echo $j; // in ra ket qua 1 -> 9
    echo "<br/>";
    $j++;
}
// su dung vong lap while: tinh tong cac so chan tu 1 toi 10
$k = 1;
$sum = 0;
while( $k <= 10){
    if($k % 2 == 0){
        $sum += $k;
    }
    $k++;
}
echo "<br/>";
echo $sum;
// 3 - do ...while : vong lap kiem tra dieu kien sau. Vong lap se luon luon thuc thi truoc it nhat 1 vong lap bat ke dieu kien truyen vao vong lap la sai hay dung.
// so vong lap chay: 1 -> vo cung
$v = 1;
do {
    echo $v; // in tu 1 -> 9
    echo "<br/>";
    $v++;
} while($v < 10);
// viet chuong trinh tinh tong binh phuong cac so le tu 1 toi 10 bang vong lap do while
// 1- kiem tra xem thang nao la so le
// 2- binh phuong cac so le do len
// 3- cong don binh phuong cac so le do lai
$z = 1;
$s = 0;
// 9 + 25 + 49 + 81 + 1 = 165
do {
    if($z % 2 != 0){
        $s += pow($z, 2); 
        // $s = $s + pow($z, 2); 
    }
    $z++;
} while( $z <= 10 );
echo "<br/>";
echo $s;