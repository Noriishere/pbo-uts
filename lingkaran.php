<?php

class lingkaran{
    public int $r;
    public const PHI = 3.14;
}

$a = new lingkaran();

$a->r = 20;

$hasil = lingkaran::PHI * ($a->r *$a->r); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBO - P1</title>
</head>
<body>
    <h1>Rumus Lingkaran</h1>
    <p>Rumus Bawaan PHI * r * r</p>
    <p>Diketahui r/Jari-jari = <?= $a->r; ?></p>
    <p>Hasil dari Luas lingkaran adalah <?= $hasil; ?></p>
</body>
</html>