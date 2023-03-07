<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "crudsystem");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function add($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $namaSiswa = htmlspecialchars($data["namasiswa"]);
  $kelasSiswa = htmlspecialchars($data["kelassiswa"]);

  // query insert data
  $query = "INSERT INTO siswa
                VALUES 
                ('', '$namaSiswa', '$kelasSiswa')
             ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
  return mysqli_affected_rows($conn);
}
