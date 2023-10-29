<?php
// cac phep toan co ban trong php
// +,-,/,*,% : toan hoc
// = gan gia tri
// == so sanh ve mat gia tri
// === sanh ve mat gia tri va ca kieu du lieu
// ! phep phu dinh
// % phep chia lay du(ket qua la phan du cua phep chia)
// 10 % 6 = 4
// x += y <=> x = x + y
// x -= y <=> x = x - y
// x *= y <=> x = x * y
// x /= y <=> x = x /y
// x += y : short syntax 
// x = x + y : full  syntax
$a = 10;
$b = 20;
$a += $b; // $a = $a + $b = 10 + 20 = 30
// bien $a dc gan lai 1 gia tri khac
echo "<br/>";
echo $a;
// $i++ hoac ++$i // ++ : phep tang 1 don vi
// $i-- hoac --$i // -- : phep giam 1 don vi
$n = 10;
$m = 11;
$n != $m; // n khong bang m
//++$n; // tang truoc ngay mot don vi;
echo "<br/>";
echo $n;
//$m++; // tang sau 1 don vi
echo "<br/>";
echo $m;
$k = (++$m) + ($n++) + (--$n);
//   12     +   10   +  10 = 32;
echo "<br/>";
echo $k;

$i = 10;
$j = 9;
$v = ($i++) + (++$j) - (++$i) + ($j--) - (--$i) + (--$j);
//     10   +   10   -   12   +   10   -   11   +   8
// 18
// 17
// 16
echo "<br/>";
echo $v;

$e = 10;
$f = 11;
$compare = $e <=> $f;
echo "<br/>";
echo $compare;
// >, <, >=, <=
// && , ||  - AND , OR : toan tu logic
// phep && tra ve true khi moi dieu kien deu dung
// phep || tre ve true khi chi can 1 trong cac dieu kien la dung.

