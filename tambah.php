<html>
<head>
</head>
<style>
    .action-btn {
  display: inline-block;
  text-decoration: none;
  color: white;
  font-weight: 700;
  background: linear-gradient(90deg,#a701c8,#55e7fc);
  padding: 0.5em 2em;
  border-radius: 60px;
  margin: 1em 0;
  transition: 0.3s;
}
</style>
<body>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_guru">Nama Guru :</label>
                <input type="text" name="nama_guru" />
            </p>

            <p>
                <label for="alamat">Alamat :</label><br>
                <textarea name="alamat" id="" cols="30" rows="S"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki"/>Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Prempuan"/>Prempuan
            </p>
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel" />
            </p>
            <p>
                <label for="ruangan">Ruangan :</label>
                <input type="text" name="ruangan" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
</form>
</center>
<a class="action-btn" href="tampil.php">Back</a>
</body>
</html>