<?php
// Membuat array dengan 6 elemen string
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

// Menampilkan seluruh isi array sebagai list HTML menggunakan looping
echo "<h3>Macam-macam perangkat keras komputer</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ol>";

// Menambahkan 2 elemen baru ke dalam array
array_push($hardware, "Card Reader", "Modem");

// Mengurutkan array dalam urutan A-Z
sort($hardware);

// Menampilkan kembali isi array setelah penambahan dan pengurutan
echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ol>";
foreach ($hardware as $item) {
    // Menandai item yang baru ditambahkan dengan garis bawah merah
    if ($item == "Card Reader" || $item == "Modem") {
        echo "<li><span style='text-decoration: underline; color: red;'>$item</span></li>";
    } else {
        echo "<li>$item</li>";
    }
}
echo "</ol>";
