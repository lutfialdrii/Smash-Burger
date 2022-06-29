<?php

$host = "localhost";
$user = "id19103123_root";
$pass = "cobaDatabase1_";
$db = "id19103123_burger";
$id_user = $_POST['id_user'];

$konek = mysqli_connect($host, $user, $pass, $db) or die("Database MYSQL Tidak Terhubung");

$perintah = "SELECT * FROM transaksi WHERE id_user = '$id_user'";
$eksekusi = mysqli_query($konek, $perintah);
$cek = mysqli_affected_rows($konek);

if ($cek > 0) {
    $response["kode"] = 1;
    $response["pesan"] = "Data Tersedia";
    $response["data"] = array();

    while ($ambil = mysqli_fetch_object($eksekusi)) {
        $F["alamat"] = $ambil->alamat;
        $F["kuantitas"] = $ambil->kuantitas;
        $F["total_harga"] = $ambil->total_harga;
        $F["waktu"] = $ambil->waktu;

        array_push($response["data"], $F);
    }

} else {
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($konek);