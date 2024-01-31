<?php

$abjad = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$mapel = ["Pendidikan Agama dan Budi Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia", "Matematika", "Bahasa Inggris", "Dasar-dasar Kejuruan RPL"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Array</title>
    <style>
        .bulet{
            width: 80px;
            height: 80px;
            background-color: red;
            text-align: center;
            line-height: 80px;
            float: left;
            margin: 5px;
            border-radius: 50%;
            color: white;
        }
        
        .clear{
            clear: both;
        }

        .kuning{
            width: 250px;
            height: 150px;
            background-color: orange;
            text-align: center;
            line-height: 150px;
            float: left;
            margin: 5px;
            border-radius: 15px 0 15px 0;
            color: white;
        }

        
    </style>
</head>
<body>
    <?php for($n = 0; $n < count($abjad); $n++) : ?>
        <div class="bulet"><?= $abjad[$n]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <h1>Mata Pelajaran - X RPL</h1>
    <?php foreach($mapel as $data) : ?>
        <div class="kuning"><?= $data; ?></div>
    <?php endforeach; ?>

    </div>
</body>
</html>