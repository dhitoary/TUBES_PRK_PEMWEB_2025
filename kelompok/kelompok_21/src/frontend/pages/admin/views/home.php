<?php

?>

<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center">
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3 text-primary">
                    <i class="fas fa-user-graduate fa-2x"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 small text-uppercase fw-bold">Total Siswa</h6>
                    <h3 class="mb-0 fw-bold">1,245</h3>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> +5% bulan ini</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center">
                <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3 text-success">
                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 small text-uppercase fw-bold">Total Tutor</h6>
                    <h3 class="mb-0 fw-bold">84</h3>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> +2 baru</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center">
                <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3 text-warning">
                    <i class="fas fa-book-open fa-2x"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 small text-uppercase fw-bold">Kelas Aktif</h6>
                    <h3 class="mb-0 fw-bold">42</h3>
                    <small class="text-muted">Sedang berjalan</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center">
                <div class="bg-danger bg-opacity-10 p-3 rounded-circle me-3 text-danger">
                    <i class="fas fa-bell fa-2x"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 small text-uppercase fw-bold">Verifikasi</h6>
                    <h3 class="mb-0 fw-bold">5</h3>
                    <small class="text-danger fw-bold">Butuh tindakan!</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="card-title mb-0 fw-bold">Statistik Pendaftaran (2025)</h5>
            </div>
            <div class="card-body">
                <canvas id="registrationChart" height="100"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white py-3">
                <h5 class="card-title mb-0 fw-bold">Sebaran Kategori</h5>
            </div>
            <div class="card-body d-flex align-items-center justify-content-center">
                <div style="width: 100%;">
                    <canvas id="categoryChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">Aktivitas Terbaru</h5>
        <button class="btn btn-sm btn-outline-primary rounded-pill">Lihat Semua</button>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>User</th>
                    <th>Aktivitas</th>
                    <th>Waktu</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=random" class="rounded-circle me-2" width="32" height="32">
                            <strong>Budi Santoso</strong>
                        </div>
                    </td>
                    <td>Mendaftar sebagai Tutor Matematika</td>
                    <td class="text-muted">2 menit lalu</td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Siti+A&background=random" class="rounded-circle me-2" width="32" height="32">
                            <strong>Siti Aminah</strong>
                        </div>
                    </td>
                    <td>Login ke sistem</td>
                    <td class="text-muted">15 menit lalu</td>
                    <td><span class="badge bg-success">Sukses</span></td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Joko+W&background=random" class="rounded-circle me-2" width="32" height="32">
                            <strong>Joko Widodo</strong>
                        </div>
                    </td>
                    <td>Update Profil</td>
                    <td class="text-muted">1 jam lalu</td>
                    <td><span class="badge bg-primary">Updated</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctxReg = document.getElementById('registrationChart').getContext('2d');
    const registrationChart = new Chart(ctxReg, {
        type: 'line', 
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Siswa Baru',
                data: [12, 19, 3, 5, 2, 3, 20, 45, 30, 55, 40, 60], 
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4 
            },
            {
                label: 'Tutor Baru',
                data: [2, 3, 1, 0, 1, 2, 5, 10, 8, 12, 5, 15], 
                borderColor: '#198754',
                backgroundColor: 'rgba(25, 135, 84, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    const ctxCat = document.getElementById('categoryChart').getContext('2d');
    const categoryChart = new Chart(ctxCat, {
        type: 'doughnut',
        data: {
            labels: ['Matematika', 'B. Inggris', 'Fisika', 'Musik', 'Coding'],
            datasets: [{
                data: [35, 25, 15, 10, 15], 
                backgroundColor: [
                    '#4e73df', 
                    '#1cc88a', 
                    '#36b9cc', 
                    '#f6c23e', 
                    '#e74a3b'  
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
</script>