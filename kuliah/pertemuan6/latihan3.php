<?php
//Array Bersarang / Nested Array
$mahasiswa = [
    ['Naila', '243040015', 'nailazalfa79@gmail.com', 'Teknik Informatika'],
    ['Syifa', '243040027', 'syifa@gmail.com', 'Teknik Informatika', [85, 100, 40]]
];
// echo $mahasiswa[1][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>