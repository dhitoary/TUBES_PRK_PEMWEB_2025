<?php
session_set_cookie_params(0, '/'); 
session_start();

$dbPath = dirname(__DIR__, 3) . '/config/database.php';

if (file_exists($dbPath)) {
    require_once $dbPath;
} else {
    die("System Error: Database configuration not found at: " . $dbPath);
}

if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    header("Location: ../admin/dashboard.php");
    exit;
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === 'admin' && $password === '123') {
        
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_role'] = 'admin'; 
        $_SESSION['user_name'] = $username;

        header("Location: ../admin/dashboard.php");
        exit;
    } else {
        $error = "Username atau Password yang Anda masukkan salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Admin</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
        }
        .brand-logo {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="brand-logo">Admin Panel</div>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <small><?= htmlspecialchars($error) ?></small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label text-muted small">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required autofocus>
            </div>
            
            <div class="mb-4">
                <label for="password" class="form-label text-muted small">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100 py-2">Masuk</button>
        </form>

        <div class="text-center mt-4">
            <a href="../public/landing_page.php" class="text-decoration-none small text-secondary">
                &larr; Kembali ke Halaman Utama
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>