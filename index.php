
<?php
session_start();
require_once "koneksi.php";

if (isset($_SESSION["user_id"])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    $stmt = mysqli_prepare(
        $koneksi,
        "SELECT id, nama, email, password
         FROM users WHERE email = ? LIMIT 1"
    );

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user["password"])) {
        session_regenerate_id(true);

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["nama"] = $user["nama"];
        $_SESSION["email"] = $user["email"];

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Email atau password salah.";
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #101827, #253858);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 20px 50px rgba(0,0,0,.25);
        }

        .login-icon {
            width: 65px;
            height: 65px;
            border-radius: 18px;
            background: #e8efff;
            color: #2457d6;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            margin: 0 auto 20px;
        }

        .form-control {
            padding: 12px;
            border-radius: 9px;
        }

        .btn-login {
            padding: 12px;
            border-radius: 9px;
            font-weight: bold;
            background: #2457d6;
            color: white;
            border: none;
        }

        .btn-login:hover {
            background: #1944b0;
            color: white;
        }
    </style>
</head>

<body>
    <div class="login-card">

        <div class="login-icon">&#128274;</div>

        <div class="text-center mb-4">
            <h3 class="fw-bold">Selamat Datang</h3>
            <p class="text-secondary">
                Silakan login ke akun administrator
            </p>
        </div>

        <?php if ($error !== ""): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Masukkan email"
                       autocomplete="username"
                       required>
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Masukkan password"
                       autocomplete="current-password"
                       required>
            </div>

            <button type="submit"
                    class="btn btn-login w-100">
                Login Sekarang
            </button>
        </form>

        <p class="text-center text-secondary small mt-4 mb-0">
            &copy; 2026 Sistem Informasi
        </p>

    </div>
</body>
</html>
