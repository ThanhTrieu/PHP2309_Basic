<?php 
$rooms = [
    ["id" => 101, "name" => "Phong to chuc"],
    ["id" => 102, "name" => "Phong tai chinh - ke toan"],
    ["id" => 103, "name"=> "Phong IT"],
];
$staffs = [
    ["id" => 1, "room_id" => 101, "name" => "Van Teo", "age" => 20, "money" => 100],
    ["id" => 2, "room_id" => 101, "name" => "Van Ty", "age" => 20, "money" => 200],
    ["id" => 3, "room_id" => 102, "name" => "Van Hoi", "age" => 21, "money" => 180],
    ["id" => 4, "room_id" => 103, "name" => "Van Thin", "age" => 19, "money" => 220]
];
// xu ly lay them thong tin ten phong ban do vao du lieu cua mang nhan vien thong qua ma phong ban tuong ung cua tung nhan vien
foreach($staffs as $key => $item){
    foreach($rooms as $index => $value){
        if($item["room_id"] == $value["id"]){
            // lay them du lieu o ben mang rooms do sang mang staff
            $staffs[$key]["name_room"] = $value["name"];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach nhan vien</title>
</head>
<body>
    <h2>Danh sach nhan vien</h2>
    <table width="100%" border="1" cellSpacing="0" cellPadding="0">
        <thead>
            <tr>
                <th>Ma NV</th>
                <th>Ho Ten</th>
                <th>Phong Ban</th>
                <th>Tuoi</th>
                <th>Luong</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($staffs as $key => $item): ?>
                <tr>
                    <td><?= $item["id"]; ?></td>
                    <td><?= $item["name"]; ?></td>
                    <td><?= $item["name_room"]; ?></td>
                    <td><?= $item["age"]; ?></td>
                    <td><?= $item["money"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>