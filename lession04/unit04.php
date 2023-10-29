<?php
    $listStudent = [
        [
            "id" => 113,
            "name" => "Teo",
            "age" => 20,
            "money" => 1000,
            "gender" => 1
        ],
        [
            "id" => 114,
            "name" => "Ty",
            "age" => 21,
            "money" => 2000,
            "gender" => 0
        ],
        [
            "id" => 115,
            "name" => "Hoi",
            "age" => 22,
            "money" => 3000,
            "gender" => 1
        ],
        [
            "id" => 116,
            "name" => "Dan",
            "age" => 20,
            "money" => 2000,
            "gender" => 0
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Students</title>
    <style>
        .chan {
            background-color: yellow;
        }
        .le {
            background-color: pink;
        }
    </style>
</head>
<body>
    <h3> Danh sach sinh vien</h3>
    <table width="100%" border="1" cellSpacing="0" cellPadding="0">
        <thead>
            <tr>
                <th>Ma SV</th>
                <th>Ho Ten</th>
                <th>Tuoi</th>
                <th>Gioi tinh</th>
                <th>Hoc bong</th>
            </tr>
        </thead>
        <tbody>
            <?php $sumMoney = 0; ?>
            <?php foreach($listStudent as $key => $item): ?>
                <?php $sumMoney += $item['money']; ?>
                <tr class="<?= $key % 2 == 0 ? 'chan' : 'le'; ?>">
                    <td><?= $item["id"]; ?></td>
                    <td><?= $item["name"]; ?></td>
                    <td><?= $item["age"]; ?></td>
                    <td><?= $item["gender"] == 1 ? 'Nam' : 'Nu'; ?></td>
                    <td><?= $item["money"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Tong tien Hoc bong</td>
                <td> <?= $sumMoney; ?> </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>