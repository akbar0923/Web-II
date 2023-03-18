<?php

$daftarSmartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
// var_dump($daftarSmartphone);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <!-- Mulai Tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <!-- Mulai foreach -->
        <?php foreach($daftarSmartphone as $ds) :  ?>
        <tr>
            <td><?= $ds; ?></td>
        </tr>
        <?php endforeach ?>
        <!-- Akhir foreach -->
    </table>
    <!-- Akhir Tabel -->
</body>
</html>