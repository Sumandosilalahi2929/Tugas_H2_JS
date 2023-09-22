<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>

</head>
<body>
    <form method="POST">
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama Anda">
        <select name="pekerjaan" id="">
            <option >---Pilih Pekerjaan---</option>
            <option >Pekerjaan 1</option>
            <option >Pekerjaan 2</option>
            <option >Pekerjaan 3</option>
            <option >Pekerjaan 4</option>
            <option >Pekerjaan 5</option>
            <option >Pekerjaan 6</option>
            <option >Pekerjaan 7</option>
            <option >Pekerjaan 8</option>
            <option >Pekerjaan 9</option>
            <option >Pekerjaan 10</option>
        </select>
        <br><br>
        <label for="">Hobby</label><br>
        <input type="radio" id="pilihan1" name="hobby" value="Hobby 1">
        <label for="pilihan1">Hobby1</label><br>
        
        <input type="radio" id="pilihan2" name="hobby" value="Hobby 2">
        <label for="pilihan2">Hobby2</label><br>
        
        <input type="radio" id="pilihan3" name="hobby" value="Hobby 3">
        <label for="pilihan3">Hobby3</label><br>
        
        <input type="radio" id="pilihan4" name="hobby" value="Hobby 4">
        <label for="pilihan4">Hobby4</label><br>
        
        <input type="radio" id="pilihan5" name="hobby" value="Hobby 5">
        <label for="pilihan5">Hobby5</label><br>
        
        <input type="radio" id="pilihan6" name="hobby" value="Hobby 6">
        <label for="pilihan6">Hobby6</label><br>
        
        <input type="radio" id="pilihan7" name="hobby" value="Hobby 7">
        <label for="pilihan7">Hobby7</label><br>
        
        <input type="radio" id="pilihan8" name="hobby" value="Hobby 8">
        <label for="pilihan8">Hobby8</label><br>
        
        <input type="radio" id="pilihan9" name="hobby" value="Hobby 9">
        <label for="pilihan9">Hobby9</label><br>
        
        <input type="radio" id="pilihan10" name="hobby" value="Hobby 10">
        <label for="pilihan10">Hobby10</label><br>
        
        <br><button name="simpan" type="submit">Simpan</button>
        <br><br>
    </form>
<?php
if(isset($_POST['simpan'])){
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];
$hobby = $_POST['hobby'];

    echo "<table border='1'>";
    echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
    echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
    echo "</table>";
  }
?>
</body>
</html>