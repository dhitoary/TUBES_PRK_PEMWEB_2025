<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Iklan Tutor</title>

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
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --border-radius-lg: 1rem;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Segoe UI', sans-serif;
        }

        /* NAVBAR WHITE LIKE DASHBOARD */
        .navbar {
            background-color: white !important;
            border-bottom: 1px solid #e5e5e5;
        }
        .navbar-brand {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--secondary-color) !important;
        }
        .nav-link {
            color: #444 !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        /* FORM CARD STYLE */
        .form-card {
            background: white;
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            box-shadow: var(--card-shadow);
        }

        .page-title {
            font-weight: 700;
            color: var(--secondary-color);
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 .25rem rgba(255, 107, 53, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

    </style>
</head>

<body>

    <!-- NAVBAR (SAMA SEPERTI DASHBOARD) -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">ScholarBridge</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-center gap-3">

                    <li class="nav-item">
                        <a class="nav-link active" href="tutor_dashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Kelas Saya</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Konfirmasi Siswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit Profil</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary px-3 py-1 text-white" href="edit_profile.php">Edit Profil</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <!-- CONTENT -->
    <div class="container py-5">

        <h2 class="page-title mb-4">Edit Profil Tutor</h2>

        <div class="form-card">

            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row g-4">

                    <!-- Nama Tutor -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nama Tutor</label>
                        <input type="text" class="form-control" name="nama_tutor" required>
                    </div>

                    <!-- Bidang Keahlian -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Bidang Keahlian</label>
                        <input type="text" class="form-control" name="keahlian" required>
                    </div>

                    <!-- Judul Profil -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Judul Profil</label>
                        <input type="text" class="form-control" name="judul_iklan" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="5" required></textarea>
                    </div>

                    <!-- Harga -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Harga per Jam (Rp)</label>
                        <input type="number" class="form-control" name="harga" required>
                    </div>

                    <!-- Domisili -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Domisili</label>
                        <input type="text" class="form-control" name="domisili" required>
                    </div>

                    <!-- Jenis Pengajaran -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Jenis Pengajaran</label>
                        <select class="form-select" name="jenis_mengajar">
                            <option selected>Pilih jenis</option>
                            <option>Online</option>
                            <option>Offline</option>
                            <option>Keduanya</option>
                        </select>
                    </div>

                    <!-- Upload Foto -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Foto Profil</label>
                        <input type="file" class="form-control" name="foto" accept="image/*">
                    </div>

                    <!-- Tombol -->
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary px-4 py-2">
                            Simpan Perubahan
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
