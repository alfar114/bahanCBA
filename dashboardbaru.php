
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard E-Commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fb;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #17243a;
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px 18px;
            color: white;
        }

        /* LOGO */
        .brand {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 40px;
            padding-left: 10px;
        }

        .brand i {
            color: #5b8cff;
            margin-right: 8px;
        }

        /* LABEL MENU */
        .menu-label {
            font-size: 11px;
            color: #8391a9;
            font-weight: bold;
            margin: 25px 10px 12px;
            letter-spacing: 1px;
        }

        /* MENU LINK */
        .sidebar a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 14px;
            margin-bottom: 6px;
            text-decoration: none;
            color: #aebbd0;
            border-radius: 9px;
            font-size: 14px;
            transition: 0.3s;
        }

        .sidebar a i {
            font-size: 18px;
        }

        .sidebar a:hover {
            background: #2d4264;
            color: white;
        }

        .sidebar a.active {
            background: #2d4264;
            color: white;
        }

        .sidebar a.active i {
            color: #73a0ff;
        }

        /* AREA KONTEN KOSONG */
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR NAVIGASI -->
    <aside class="sidebar">

        <!-- LOGO -->
        <div class="brand">
            <i class="bi bi-bag-check-fill"></i>
            ShopAdmin
        </div>

        <!-- MENU UTAMA -->
        <div class="menu-label">
            MENU UTAMA
        </div>

        <a href="dashboard.php" class="active">
            <i class="bi bi-grid"></i>
            Dashboard
        </a>

        <a href="#">
            <i class="bi bi-box-seam"></i>
            Produk
        </a>

        <a href="#">
            <i class="bi bi-cart3"></i>
            Pesanan
        </a>

        <a href="#">
            <i class="bi bi-people"></i>
            Pelanggan
        </a>

        <a href="#">
            <i class="bi bi-tags"></i>
            Kategori
        </a>

        <!-- LAPORAN -->
        <div class="menu-label">
            LAPORAN
        </div>

        <a href="#">
            <i class="bi bi-bar-chart"></i>
            Statistik Penjualan
        </a>

        <a href="#">
            <i class="bi bi-file-earmark-text"></i>
            Laporan
        </a>

        <!-- PENGATURAN -->
        <div class="menu-label">
            PENGATURAN
        </div>

        <a href="#">
            <i class="bi bi-gear"></i>
            Pengaturan
        </a>

        <a href="logout.php">
            <i class="bi bi-box-arrow-left"></i>
            Logout
        </a>

    </aside>

    <!-- AREA KONTEN (BELUM DIISI) -->
    <main class="main-content">
        <!-- Nanti kita isi dashboard di sini -->
    </main>

</body>
</html>
