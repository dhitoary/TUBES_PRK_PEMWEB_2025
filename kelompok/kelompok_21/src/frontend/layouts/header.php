<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$base_url_assets = "../../assets"; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>ScholarBridge - Bridging Students to Academic Excellence</title>

    <link rel="stylesheet" href="<?php echo $base_url_assets; ?>/css/style.css">

    </head>
<body>
    <header style="background-color: var(--color-bg-white); box-shadow: var(--box-shadow); padding: 1rem 0;">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <a href="../public/landing_page.php" style="font-size: 1.5rem; font-weight: bold; color: var(--color-primary);">
                🚀 ScholarBridge
            </a>
            
            <nav>
                <ul style="display: flex; gap: 20px;">
                    <li><a href="../public/landing_page.php">Beranda</a></li>
                    <li><a href="#">Cari Tutor</a></li>
                    
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <li><a href="../../../backend/auth/logout.php" style="color: var(--color-danger);">Logout</a></li>
                    <?php else: ?>
                        <li><a href="../auth/login.php" style="font-weight: bold;">Login / Daftar</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <main style="min-height: 80vh; padding: 20px 0;">