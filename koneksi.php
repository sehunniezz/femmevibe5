<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_fresh";
$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
$nama_lengkap = $_REQUEST['nama_lengkap'];
$email = $_REQUEST['email'];
$alamat = $_REQUEST['alamat'];
$provinsi = $_REQUEST['provinsi'];
$asal_kota = $_REQUEST['asal_kota'];
$tanggal_berkunjung = $_REQUEST['tanggal_berkunjung'];
$jenis_kelamin = $_REQUEST['jkelamin'];
$pesan = $_REQUEST['pesan'];

$sql = "INSERT INTO tamu (nama_lengkap, email, alamat, provinsi, asal_kota, tanggal_berkunjung, jkelamin, pesan) VALUES ('$nama_lengkap', '$email', '$alamat', '$provinsi', '$asal_kota', '$tanggal_berkunjung', '$jenis_kelamin', '$pesan')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo '<script>alert("Pesan anda sudah terkirim")</script>';
	echo '<script>window.location="buku-tamu.php"</script>';
}else{
	echo 'Data gagal diubah' .mysqli_error($conn);
}

mysqli_close($conn);