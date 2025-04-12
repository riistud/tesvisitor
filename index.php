<?php
// File untuk simpan hitungan visitor
$filename = "counter.txt";

// Cek kalau file belum ada, buat file dan isi 0
if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

// Ambil nilai sekarang
$counter = (int)file_get_contents($filename);

// Tambah 1
$counter++;

// Simpan balik
file_put_contents($filename, $counter);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Visitor Counter</title>
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      margin-top: 100px;
    }
    .counter {
      font-size: 2rem;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Selamat Datang di Halaman Visitor</h1>
  <div class="counter">
    Visitor ke-<?= $counter ?>
  </div>
</body>
</html>
