<?php
require 'functions.php';
// ambil data
$id = $_GET["id"];
// query data mhs berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id") [0];
 

if(isset($_POST["submit"])){
    // cek error
var_dump($_POST);
    if(ubah($_POST)>0){
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href ='index.php';
            </script>
        ";
    } else{
        echo "data gagal diubah";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="text" name="id" value="<?= $mhs["id"]; ?>" required>
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>" >
            </li>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar"required value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>


</body>
</html>