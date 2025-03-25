<?php
// $mahasiswa = [
//     ['Naila Zalfa', '243040015', 'nailazalfa79@gmail.com', 'Teknik Informatika'],
//     ['Syifa Aulia', '240000000', 'syifa26@gmail.com', 'Teknik Informatika']

// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        'nama' => 'Naila Zalfa',
        'nrp' => '243040015',
        'email' => 'nailazalfa79@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'gambar' => 'nailazalfa.jpeg'
    ],
    [
        'nama' => 'Syifa Aaulia',
        'nrp' => '240000000',
        'email' => 'syifa@gmail.com',
        'jurusan' => 'Teknik Industri',
        'gambar' => 'sy.jpeg'
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs['gambar']; ?>">
            </li>
            <li>Nama : <?= $mhs['nama']; ?></li>
            <li>NRP : <?= $mhs['nrp']; ?></li>
            <li>Email : <?= $mhs['email']; ?></li>
            <li>Jurusan : <?= $mhs['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>