<?php
$mahasiswa = [
    [
        'nama' => 'Naila Zalfa',
        'nrp' => '243040015',
        'email' => 'nailazalfa79@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'gambar' => 'nailazalfa.jpeg'
    ],

    [
        'nama' => 'Syifa Aulia',
        'nrp' => '243000001',
        'email' => 'syifa@gmail.com',
        'jurusan' => 'Teknik Industri',
        'gambar' => '7.jpeg'
    ],

    [
        'nama' => 'Rizsky Ilham',
        'nrp' => '240000002',
        'email' => 'Rizsky@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'gambar' => '4.jpeg'
    ],

    [
        'nama' => 'Muzi Citra',
        'nrp' => '240000003',
        'email' => 'muji@gmail.com',
        'jurusan' => 'Teknik Pangan',
        'gambar' => '3.jpeg'
    ],

    [
        'nama' => 'Yunia Riswanti',
        'nrp' => '240000004',
        'email' => 'yuniaq@gmail.com',
        'jurusan' => 'Teknik Industri',
        'gambar' => '5.jpeg'
    ],

    [
        'nama' => 'Moch Iqbal',
        'nrp' => '240000005',
        'email' => 'iqbal@gmail.com',
        'jurusan' => 'Teknik Mesin',
        'gambar' => '6.jpeg'
    ],

    [
        'nama' => 'Auliya Nur',
        'nrp' => '240000006',
        'email' => 'aul@gmail.com',
        'jurusan' => 'Teknik Pangan',
        'gambar' => 'sy.jpeg'
    ],

    [
        'nama' => 'Raidhatul',
        'nrp' => '240000007',
        'email' => 'atul@gmail.com',
        'jurusan' => 'Teknik Industri',
        'gambar' => '8.jpeg'
    ],

    [
        'nama' => 'Alisha Nur',
        'nrp' => '240000008',
        'email' => 'cacaaa@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'gambar' => '9.jpeg'
    ],

    [
        'nama' => 'Didan Ganda',
        'nrp' => '240000009',
        'email' => 'didan@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'gambar' => '10.jpeg'
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