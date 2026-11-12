
<?php
session_start();

// Aktifkan jika ingin membatasi akses login
// if (!isset($_SESSION['login'])) {
//     header("Location: index.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6fa;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #17243a;
            padding: 25px 16px;
            color: white;
            overflow-y: auto;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 10px 30px;
            font-size: 21px;
            font-weight: bold;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: #3978f6;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .menu-label {
            color: #8996aa;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;
            margin: 20px 12px 10px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 12px 14px;
            margin-bottom: 6px;
            color: #bdc7d6;
            text-decoration: none;
            border-radius: 9px;
            font-size: 14px;
            transition: .2s;
        }

        .sidebar a i {
            font-size: 18px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #3978f6;
            color: white;
        }

        .sidebar a.logout {
            color: #ff8585;
            margin-top: 10px;
        }

        .sidebar a.logout:hover {
            background: #a93636;
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }
    </style>
</head>
<body>

<aside class="sidebar">

    <div class="brand">
        <div class="brand-icon">
            <i class="bi bi-building"></i>
        </div>
        <span>OfficeAdmin</span>
    </div>

    <div class="menu-label">MENU UTAMA</div>

    <a href="#" class="active">
        <i class="bi bi-grid"></i>
        Dashboard
    </a>

    <a href="#">
        <i class="bi bi-people"></i>
        Data Pegawai
    </a>

    <a href="#">
        <i class="bi bi-diagram-3"></i>
        Departemen
    </a>

    <a href="#">
        <i class="bi bi-calendar-check"></i>
        Absensi
    </a>

    <a href="#">
        <i class="bi bi-calendar3"></i>
        Jadwal Kerja
    </a>

    <a href="#">
        <i class="bi bi-folder2-open"></i>
        Dokumen
    </a>

    <div class="menu-label">MANAJEMEN</div>

    <a href="#">
        <i class="bi bi-wallet2"></i>
        Keuangan
    </a>

    <a href="#">
        <i class="bi bi-clipboard-data"></i>
        Laporan
    </a>

    <a href="#">
        <i class="bi bi-megaphone"></i>
        Pengumuman
    </a>

    <div class="menu-label">PENGATURAN</div>

    <a href="#">
        <i class="bi bi-person-circle"></i>
        Profil Saya
    </a>

    <a href="#">
        <i class="bi bi-gear"></i>
        Pengaturan
    </a>

    <a href="logout.php" class="logout">
        <i class="bi bi-box-arrow-left"></i>
        Logout
    </a>

</aside>

<main class="main-content">
    <!-- Isi dashboard kita buat nanti -->
</main>

</body>
</html>
