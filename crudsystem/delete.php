<?php
require 'php/functions.php';

$id = $_GET["id"];

if (delete($id) > 0) {
  echo "<script>
    alert('Data berhasil dihapus!');
    document.location.href = 'index.php';
      </script>";
  exit;
} else {
  "<script>
        alert('Data gagal dihapus!');
        document.location.href = 'index.php';
    </script>";
  exit;
}
