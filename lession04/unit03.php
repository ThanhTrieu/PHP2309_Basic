<?php
// tiep tuc kien thuc ve mang
$arrNumber = [1,2,[3,4,5],[6,7,8],9];
// dem so luong phan tu cua mang
$count = count($arrNumber);
//echo $count;
//echo $arrNumber[3][1]; // mang da chieu
//echo $arrNumber[2][2];
$student = [
    [
        "name" => "Teo",
        "info" => [
            "email" => "teo@gmail.com",
            "address" => "Ha Noi"
        ]
    ],
    [
        "name" => "Ty",
        "info" => [
            "email" => "ty@gmail.com",
            "address" => "Hai Phong"
        ]
    ],
];
echo "<pre>";
//print_r($student[0]["info"]["address"]);
// duyet qua lan luot cac phan tu trong mang
// 1 - for ...
$arrNumber2 = [1,2,3,4,5,6,7,8,9];
$count2 = count($arrNumber2);
for($i = 0; $i < $count2; $i++){
    echo $arrNumber2[$i];
    echo "<br/>";
}
// 2 - foreach ...
foreach($arrNumber2 as $key => $value){
    echo "key: {$key} - value : {$value}";
    echo "<br/>";
}
foreach($arrNumber2 as $value){
    echo "value : {$value}";
    echo "<br/>";
}

$listStudent = [
    ["id" => 113,"name" => "Teo", "age" => 20],
    ["id" => 114,"name" => "Ty", "age" => 21],
    ["id" => 115,"name" => "Hoi", "age" => 22]
];
foreach($listStudent as $key => $value){
    // $key == ??? 0,1,2
    // $value: 3 mang con
    echo $value["id"] . $value["name"] . $value["age"];
    echo "<br/>";
}

// Condition ? A : B;
// Condition is true => A
// Condition is false => B
$x = 10;
$y = 20;
$z = ($x - $y > $y - $x) ? $x : $y;