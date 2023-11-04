<?php
if (isset($_POST['submit'])) {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $hobi = $_POST["hobi"];
  $kota = $_POST["kota"];

  $koneksi = new mysqli ('localhost', 'root', '', 'form_belajar_programming');

  if ($koneksi->connect_error){
    die("Koneksi Gagal:" . $koneksi->connect_error);
  }

  $hobi_str = implode(', ', $hobi);
  $query = "INSERT INTO register (nama, email, pesan, jenis_kelamin, hobi, kota) VALUES ('$nama', '$email','$pesan','$jenis_kelamin','$hobi_str','$kota')";

  if ($koneksi->query($query) === TRUE) {
    echo "Data Bserhasil Disimpan";
  } else {
    echo "Error:" . $query . $koneksi->error;
  }

  $koneksi-> close();
}
?>