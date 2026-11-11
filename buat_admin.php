
<?php
require_once "koneksi.php";

$nama = "Administrator";
$email = "admin@gmail.com";
$password = password_hash("Admin123!", PASSWORD_DEFAULT);

$stmt = mysqli_prepare(
    $koneksi,
    "INSERT INTO users (nama, email, password)
     VALUES (?, ?, ?)"
);

mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $nama,
    $email,
    $password
);

if (mysqli_stmt_execute($stmt)) {
    echo "Akun berhasil dibuat. Silakan login.";
} else {
    echo "Gagal membuat akun. Email mungkin sudah terdaftar.";
}

mysqli_stmt_close($stmt);
?>
