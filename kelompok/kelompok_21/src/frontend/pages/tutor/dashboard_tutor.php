<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tutor</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #FF6B35;
            --primary-dark: #E55A2B;
            --secondary-color: #1B4965;
            --accent-color: #9FD3C7;
            --success-color: #48bb78;
            --warning-color: #FF6B35;
            --danger-color: #f56565;
            --dark-color: #0A1628;
            --light-bg: #f5f5f5;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            --hover-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
            --border-radius-lg: 1rem;
            --border-radius-md: 0.75rem;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background-color: var(--secondary-color);
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: var(--accent-color) !important;
        }

        .dashboard-card {
            background: white;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--card-shadow);
            padding: 1.5rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">TutorConnect</a>

            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <!-- Tombol direct ke Edit Profile -->
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-warning" href="edit_profile.php">Edit Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Kelas Saya</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- MAIN CONTENT -->
    <div class="container py-4">

        <h2 class="fw-bold text-secondary mb-4">Dashboard Tutor</h2>

        <div class="row g-4">

            <!-- PROFILE SIDEBAR -->
            <div class="col-md-4">
                <div class="dashboard-card text-center">

                    <img src="https://i.pravatar.cc/150?img=46"
                         class="rounded-circle mb-3 shadow"
                         width="120">

                    <h5 class="fw-bold">Nama Tutor</h5>
                    <p class="text-muted">Matematika • Fisika</p>

                    <span class="badge bg-success">Verified Tutor</span>

                    <hr>

                    <p class="text-muted">Domisili: Jakarta Selatan</p>
                    <p class="text-muted">Mengajar: Online & Offline</p>

                    <a href="edit_profile.php" class="btn btn-primary w-100 mt-2">Edit Profile</a>
                </div>
            </div>


            <!-- MAIN DASHBOARD -->
            <div class="col-md-8">

                <!-- KONFIRMASI SISWA -->
                <div class="dashboard-card mb-4">
                    <h5 class="fw-bold mb-3">Konfirmasi Pendaftaran Siswa</h5>

                    <div class="d-flex justify-content-between align-items-center p-3 border rounded mb-3">
                        <div>
                            <strong>Ahmad Fikri</strong><br>
                            <small class="text-muted">Kelas: Matematika Dasar</small>
                        </div>
                        <div>
                            <button class="btn btn-success btn-sm">Setujui</button>
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3 border rounded">
                        <div>
                            <strong>Siti Rahma</strong><br>
                            <small class="text-muted">Kelas: Fisika SMA</small>
                        </div>
                        <div>
                            <button class="btn btn-success btn-sm">Setujui</button>
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </div>
                    </div>
                </div>


                <!-- TAMBAH KELAS -->
                <div class="dashboard-card mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Kelas Saya</h5>
                        <a href="tambah_kelas.php" class="btn btn-primary btn-sm">Tambah Kelas</a>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            Matematika Dasar
                            <span class="badge bg-secondary">12 Siswa</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            Fisika SMA
                            <span class="badge bg-secondary">8 Siswa</span>
                        </li>
                    </ul>
                </div>


                <!-- UPDATE PROFIL QUICK BUTTON -->
                <div class="dashboard-card text-center">
                    <h5 class="fw-bold">Anda Ingin Memperbarui Profil?</h5>
                    <p class="text-muted mb-3">Perbarui informasi pribadi dan pengalaman Anda.</p>
                    <a href="edit_profile.php" class="btn btn-primary px-4">Edit Sekarang</a>
                </div>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
