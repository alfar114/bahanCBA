
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Admin</title>

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
            background: #f4f6fb;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #17243a;
            position: fixed;
            top: 0;
            left: 0;
            padding: 24px 15px;
            color: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 10px 30px;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            background: #3978f6;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .brand h5 {
            margin: 0;
            font-weight: bold;
        }

        .brand small {
            color: #9baac0;
            font-size: 11px;
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
            margin-bottom: 5px;
            border-radius: 9px;
            text-decoration: none;
            color: #bdc7d6;
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
            margin-top: 15px;
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
            <i class="bi bi-book-half"></i>
        </div>

        <div>
            <h5>Library Admin</h5>
            <small>Management System</small>
        </div>
    </div>

    <div class="menu-label">MENU UTAMA</div>

    <a href="#" class="active">
        <i class="bi bi-grid"></i>
        Dashboard
    </a>

    <a href="#">
        <i class="bi bi-book"></i>
        Data Buku
    </a>

    <a href="#">
        <i class="bi bi-tags"></i>
        Kategori Buku
    </a>

    <a href="#">
        <i class="bi bi-people"></i>
        Data Anggota
    </a>

    <div class="menu-label">TRANSAKSI</div>

    <a href="#">
        <i class="bi bi-journal-arrow-down"></i>
        Peminjaman
    </a>

    <a href="#">
        <i class="bi bi-journal-check"></i>
        Pengembalian
    </a>

    <a href="#">
        <i class="bi bi-cash-coin"></i>
        Denda
    </a>

    <div class="menu-label">LAINNYA</div>

    <a href="#">
        <i class="bi bi-file-earmark-bar-graph"></i>
        Laporan
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
    <!-- Isi dashboard dibuat nanti -->
</main>

</body>
</html>
