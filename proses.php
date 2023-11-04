<html>
  <head>
  <title>Hasil Form</title>
  </head>
  <body>
    <h1>Hasil Formulir PHP</h1>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $pesan = $_POST["pesan"];
      $jenis_kelamin = $_POST["jenis_kelamin"];
      $hobi = $_POST["hobi"];
      $kota = $_POST["kota"];

      echo "Nama: " . $nama . "<br>";
      echo "Email: " . $email . "<br>";
      echo "Pesan: " . $pesan . "<br>";
      echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
      echo "Hobi: " . implode(", ", $hobi) . "<br>";
      echo "Kota: " . $kota . "<br>";
    } else {
      echo "Data Tidak ditemukan";
    }
    ?>
  </body>
</html>