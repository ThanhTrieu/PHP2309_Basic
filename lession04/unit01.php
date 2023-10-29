<?php
// lam viec string "chuoi"
// chuoi : bao gom cac chu cai, con so va cac ky tu dac biet nam trong nhay hoac nhay kep
// kieu du lieu : string
$string = "Dang hoc php";
$string2 = 'Dang hoc php basic';
var_dump($string, $string2);
// trong php , toan tu "." ghep chuoi(noi chuoi)
echo "<br/>";
echo $string . $string2; // ghep 2 chuoi lai lam 1
echo "<br/>";
$age = 20;
$string3 = "Nam nay toi {$age} tuoi";
$string4 = 'Nam nay toi {$age} tuoi';
echo $string3;
echo "<br/>";
echo $string4;
// su khac biet lon nhat giua nhay va nhay kep trong php ve chuoi : nhay kep cho phep su dung bien trong chuoi, con nhay don thi ko?
$string5 = " Hoc \"PHP\"  co ban";
$string6 = 'Hoc \'OOP\' PHP';
$string7 = 'Hoc "PHP" co ban';
$string8 = "Hoc 'php' oop";
echo "<br/>";
//echo $string6;
///// Cac ham co san lam viec voi chuoi trong  php /////
// 1 - Get string length
$countLength = strlen($string8);
echo $countLength;
echo "<br/>";
echo strtoupper($string8);
echo "<br/>";
echo strtolower($string7);
echo "<br/>";
echo ltrim($string8); // xoa khoang trang mac dinh ben trai
echo "<br/>";
echo ltrim($string8,"H"); // xoa ky tu dau tien ben trai
echo "<br/>";
echo $string8;
echo "<br/>";
$md5Str = md5($string8);
echo $md5Str;
// cac ham lam viec voi string trong php thi khong truc tiep lam thay doi chuoi ban dau, ma luon luon tra ve mot chuoi moi
echo "<br/>";
$myStr = "<h1><i>Hoc PHP co ban</i></h1>";
echo strip_tags($myStr,"<i>");
// php ho tro viec hien thi ma the html ra ngoai trinh duyet
echo "<br/>";
$string9 = "Hoc php oop";
$findPosition = strpos($string9,"abc");
if($findPosition !== false){
    var_dump($findPosition);
    // tim thay
}
// != : khong bang ve mat gia tri
// !== : khong bang ve gia tri va kieu du lieu