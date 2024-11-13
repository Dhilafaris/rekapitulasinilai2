<?php

include "./config.php";

$username = @$_POST['username'];
$diskusi = @$_POST['diskusi'];
$praktikum = @$_POST['praktikum'];
$responsi = @$_POST['responsi'];
$uts = @$_POST['uts'];
$uas = @$_POST['uas'];

$sql = "INSERT INTO users (username, diskusi, praktikum, responsi, uts, uas) VALUES ('$username', '$diskusi',  '$praktikum', '$responsi', '$uts', '$uas')";
$query = mysqli_query($sambung, $sql);

if ($query) {
    echo "<script>alert('Berhasil ditambahkan'); window.location.href='halaman_tambah_mhs.php'</script>";
    // header("location: halaman_admin.php");
} else {
    echo "<script>alert('Gagal');</script>";
}

?>