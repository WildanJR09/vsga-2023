<?php
include "connection.php";

define("IPK", 3.40);

$ipk = IPK;

$disabled = "";
$cursor = "";

//$query = "ALTER TABLE beasiswa ADD COLUMN status_ajuan VARCHAR(50) DEFAULT 'belum di verifikasi'";
//mysqli_query($conn, $query);

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $semester = $_POST['semester'];
    $ipk = IPK;
    $beasiswa = $_POST['beasiswa'];
    $berkas = $_POST['berkas'];

    if($ipk < 3){
        echo "<script>alert('Maaf, IPK Anda tidak mencukupi untuk mendaftar beasiswa.');window.location='daftar.php'</script>";
    } else {
        $query = "ALTER TABLE beasiswa ADD COLUMN status_ajuan VARCHAR(50) DEFAULT 'belum di verifikasi'";

        $submit = "INSERT INTO beasiswa(nama, email, telepon, semester, ipk, beasiswa, berkas) VALUES('$nama', '$email', '$telepon', '$semester', '$ipk', '$beasiswa', '$berkas')";

        $result = mysqli_query($conn, $submit);

        if($result){
            echo "<script>alert('Anda berhasil mendaftar beasiswa!');window.location='daftar.php'</script>";
        }
    }
}

if($ipk < 3){
    $disabled = "disabled";
} else {
    $cursor = "style='cursor: pointer;'";
}
?>