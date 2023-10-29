<?php
// dinh nghia ham trong php
// ham : tap hap cac lenh de giai quyet mot van de
// giup cho chuong trinh tuong minh, de bao tri, nang cap, kiem soat ung dung
function sumNumber($a, $b = 3){
    return $a + $b;
    //echo "my function";
}
// function: keyword de khai bao ham
// sumNumber: ten ham do user tu dinh nghia
// () cu phap: giup truyen tham so vao ham neu co - giup thuc thi ham luc goi ra su dung
// { : start block
// } : end block
// tat ma lenh nam trong start block va end block - body function
// return : tra ket ve cho ham neu can(khong bat buoc luc nao cung phai co)
// $a, $b tham so hinh thuc truyen vao ham (khong bat buoc luc nao cung phai co)

/////// GOI HAM RA SU DUNG 
$sum = sumNumber(1, 9);
// 1,2  tham so thuc(tham so that): tham so co y nghia thuc su ve mat gia tri
echo $sum;
// tu khoa return: giup thoat luon khoi ham khi gap tu khoa nay, cac lenh ben duoi trong ham se ko dc thuc thi

// tu khoa break
for($i = 1; $i < 10; $i++){
    if($i < 6){
        
        echo $i; // ??? 12345
        echo "<br/>";
        //break;
        continue;
    }
    echo " i  {$i}"; // 6789
    echo "<br/>";
}
// viet ham tinh tong cac so tu 1 toi N
// (N(N+1))/2
function tongCacSoToiN($n){
    return ($n*($n+1))/2;
}
$res = tongCacSoToiN(10);
echo "<br/>";
echo $res;
// viet ham kiem tra 1 so co phai so nguyen to ko?
function kiemTraSNT($n){
    // nen return ket qua tra ve
    if($n <= 1){
        return false;
    }
    if($n == 2){
        return true;
    }
    $count = sqrt($n);
    for($i = 2; $i <= $count; $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}
$checking = kiemTraSNT(23);
if($checking){
    echo "So nguyen to";
} else {
    echo "khong phai so nguyen to";
}
// tinh trung binh cong cac so nguyen to tu 1 toi 30;
// 1 - can co 1 ham kiem tra so nguyen to
// 2 - can co 1 ham tinh tong cac so nguyen to
// 3 - can co 1 ham dem so luong cac so nguyen to
// 4 - tinh TB = buoc 2 va buoc 3 bo tro
function tongCacSoNguyenTo($i = 1, $j = 30){
    $sum = 0;
    for($k = $i; $k <= $j; $k++){
        if(kiemTraSNT($k)){
            $sum += $k;
        }
    }
    return $sum;
}
function demSNT($i = 1, $j = 30){
    $count = 0;
    for($k = $i; $k <= $j; $k++){
        if(kiemTraSNT($k)){
            $count++;
        }
    }
    return $count;
}
function tinhTBC($i = 1, $j = 30){
    return tongCacSoNguyenTo($i,$j) / demSNT($i, $j);
}
$result = tinhTBC(1,5);
echo "<br/>";
echo $result;