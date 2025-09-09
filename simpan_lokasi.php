<?php
// Konfigurasi database
$host = "localhost";
$user = "root";      // ganti sesuai user MySQL kamu
$pass = "";          // ganti sesuai password MySQL kamu
$db   = "weatherdb"; // ganti sesuai nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$device_id = $_POST['device_id'];
$latitude  = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Simpan ke tabel devices
$sql = "INSERT INTO devices (device_id, lat, lon, gps_source, gps_set_at) 
        VALUES ('$device_id', '$latitude', '$longitude', 'manual-smartphone', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Lokasi berhasil disimpan!<br>";
    echo "Device ID: $device_id <br>";
    echo "Latitude: $latitude <br>";
    echo "Longitude: $longitude <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
