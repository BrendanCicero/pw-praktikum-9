<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data karyawan berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('Data karyawan gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
    <style>
        .flex {
            text-align: center;
            margin: 10px 35% 10px 35%;
            background: #07689f;
            padding: 10px 0px;
        }
    </style>
</head>

<body style="background-image: url(bg2.jpg); background-size: cover;">
    <div class="flex">
        <h2>Tambah Data Karyawan</h2>

        <form action="" method="post">
            <br>
            <label for="name" style="margin-right: 48%;">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Masukkan name" style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="email" style="margin-right: 50%;">Email</label><br>
            <input type="text" name="email" id="email" placeholder="Masukkan email" style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="address" style="margin-right: 44%;">Address</label><br>
            <input type="text" name="address" id="address" placeholder="Masukkan address" style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="gender" style="margin-right: 45%;">Gender</label><br>
            <select name="gender" id="gender" style="padding-right: 152px;">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br>

            <label for="position" style="margin-right: 45%;">Position</label><br>
            <input type="text" name="position" id="position" placeholder="Masukkan position" style="margin-top: 5px; padding-right: 50px;">
            <br><br>

            <label for="status" style="margin-right: 50%;">Status</label><br>
            <select name="status" id="status" style="padding-right: 148px;">
                <option value="Fulltime">Fulltime</option>
                <option value="Parttime">Parttime</option>
            </select>
            <br><br>

            <input type="submit" name="submit" value="Submit" class="btn btn-success" style="margin-right: 20%;">
            <a href="index.php" class="btn btn-primary">Back</a>
        </form>

    </div>
</body>

</html>