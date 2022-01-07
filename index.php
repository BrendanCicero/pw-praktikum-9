<?php
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
</head>

<body style="background-image: url(bg2.jpg); background-size: cover;">
    <div style="text-align: center;">
        <h1 style="background: #07689f;">Daftar Karyawan </h1><br>
        <img src="berjabat.jpg" alt="" width="300">
        <br><br>

        <div class="flex-container">
            <a href="tambah.php" class="btn btn-primary" style="margin-right: 15%;">Add Data</a>
        </div>
        <br>

        <table border="1" align="center" cellpadding="10" cellspacing="0">
            <tr style="background: #ffc93c;">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php foreach ($karyawan as $item) : ?>
                <tr style="background: #40a8c4;">
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['address']; ?></td>
                    <td><?= $item['gender']; ?></td>
                    <td><?= $item['position']; ?></td>
                    <td><?= $item['status']; ?></td>
                    <td><a href="hapus.php?id=<?= $item['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin data akan dihapus ?')">Delete</a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>