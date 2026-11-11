
<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark px-4">
        <span class="navbar-brand">Dashboard Admin</span>

        <a href="logout.php" class="btn btn-outline-light btn-sm">
            Logout
        </a>
    </nav>

    <main class="container py-5">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h2>Halo, <?= htmlspecialchars($_SESSION["nama"]) ?>!</h2>

                <p class="text-secondary">
                    Login berhasil. Website PHP Native lo sudah
                    terhubung ke database MySQL.
                </p>

                <div class="alert alert-success mb-0">
                    Selamat datang di halaman dashboard administrator.
                </div>
            </div>
        </div>
    </main>

</body>
</html>
