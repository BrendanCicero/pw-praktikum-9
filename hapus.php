<?php
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data ke-$id berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data ke-$id gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
