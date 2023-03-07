<?php
require 'php/functions.php';
$siswa = query("SELECT * FROM siswa");

// cek apakah tombol add sudah ditekan atau belum
if (isset($_POST['add'])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (add($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan!');
        </script>";
  } else {
    echo "<script>
      alert('data gagal ditambahkan');
        </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Siswa</title>
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <h3>CRUD APP Daftar Siswa</h3>

  <form action="" method="post">
    <input type="search" name="keyword" size="25" placeholder="masukkan keyword pencarian" autocomplete="off" autofocus />
    <button type="submit" name="search">Cari!</button>
  </form>

  <br />

  <table class="GeneratedTable">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($siswa as $row) : ?>
      <tbody>
        <tr>
          <td><?= $row["id"]; ?></td>
          <td><?= $row["namasiswa"]; ?></td>
          <td><?= $row["kelassiswa"]; ?></td>
          <td><a href="delete.php?id=<?= $row["id"]; ?>">Hapus</a>
          </td>
        </tr>
      </tbody>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

  <div class="add">
    <h1>Tambah data siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <ul>
        <li style="list-style-type: none;">
          <label for="namasiswa">Nama </label>
          <input type="text" name="namasiswa" id="namasiswa" required>
        </li>
        <li style="list-style-type: none;">
          <label for="kelassiswa">Kelas</label>
          <input type="text" list="kelassiswa" name="kelassiswa" id="kelas_siswa" required>
          <datalist id="kelassiswa">
            <option value="IX A"></option>
            <option value="IX B"></option>
            <option value="IX C"></option>
            <option value="IX D"></option>
          </datalist>
        </li>
        <li style="list-style-type: none;">
          <button type="submit" name="add">Tambah</button>
        </li>
  </div>

</body>

</html>