<html>
  <head>
  <title>Belajar Form</title>
  </head>
  <body>
    <h1>Formulir</h1>
    <form action="conn.php" method="post">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>
      <br>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>
      <br>

      <label for="pesan">Pesan:</label>
      <textarea id="pesan" name="pesan" rows="4" required></textarea>
      <br>

      <label>Jenis Kelamin:</label>
      <input type="radio" id="laki" name="jenis_kelamin" value="laki-laki">
      <label for="laki">Laki-laki</label>
      <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
      <label for="perempuan">Perempuan</label>
      <br>

      <label>Hobi:</label>
      <input type="checkbox" id="membaca" name="hobi[]" value="membaca">
      <label for="membaca">Membaca</label>
      <input type="checkbox" id="berenang" name="hobi[]" value="berenang">
      <label for="berenang">Berenang</label>
      <input type="checkbox" id="menulis" name="hobi[]" value="menulis">
      <label for="menulis">Menulis</label>
      <br>

      <label for="kota">Kota:</label>
      <select name="kota" id="kota">
        <option value="Jakarta">Jakarta</option>
        <option value="Surabaya">Surabaya</option>
        <option value="Bandung">Bandung</option>
        <option value="Yogyakarta">Yogyakarta</option>
      </select>
      <br>

      <button type="submit" name="submit">Kirim</button>
    </form>
  </body>
</html>