<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Siswa (Murid)</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.print()">Export Data</button>
        </div>
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalSiswa">
            <i class="fas fa-plus me-1"></i> Tambah Siswa
        </button>
    </div>
</div>

<div class="row mb-3 no-print">
    <div class="col-md-3">
        <select id="filterJenjang" class="form-select bg-light border-0" onchange="filterSiswa()">
            <option value="">Semua Jenjang</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
        </select>
    </div>
    <div class="col-md-6">
        <input type="text" id="searchSiswa" class="form-control bg-light border-0" placeholder="Cari nama siswa..." onkeyup="filterSiswa()">
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0" id="tableSiswa">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4">Nama Siswa</th>
                    <th>Jenjang</th>
                    <th>Sekolah</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th class="text-end pe-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Andi+P&background=random" class="rounded-circle me-3" width="35">
                            <div>
                                <div class="fw-bold nama-col">Andi Pratama</div>
                                <small class="text-muted">andi@gmail.com</small>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-primary jenjang-col">SMA</span></td>
                    <td>SMAN 1 Jakarta</td>
                    <td>12 IPA</td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td class="text-end pe-4">
                        <button class="btn btn-sm btn-light text-info" onclick="showDetailSiswa('Andi Pratama', 'SMA', 'SMAN 1 Jakarta', '12 IPA', 'Matematika, Fisika')"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-light text-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="ps-4">
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Rara+A&background=random" class="rounded-circle me-3" width="35">
                            <div>
                                <div class="fw-bold nama-col">Rara Anindita</div>
                                <small class="text-muted">rara@yahoo.com</small>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-info text-dark jenjang-col">SD</span></td>
                    <td>SD Tunas Bangsa</td>
                    <td>Kelas 4</td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td class="text-end pe-4">
                        <button class="btn btn-sm btn-light text-info" onclick="showDetailSiswa('Rara Anindita', 'SD', 'SD Tunas Bangsa', 'Kelas 4', 'Calistung, B. Inggris')"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-light text-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalDetailSiswa" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Info Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <img id="d_img" src="" class="rounded-circle shadow-sm" width="80">
                    <h4 id="d_nama" class="mt-2 fw-bold"></h4>
                    <span id="d_jenjang" class="badge bg-primary"></span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between"><span>Sekolah</span><strong id="d_sekolah"></strong></li>
                    <li class="list-group-item d-flex justify-content-between"><span>Kelas</span><strong id="d_kelas"></strong></li>
                    <li class="list-group-item">
                        <small class="text-muted d-block">Minat Belajar:</small>
                        <p id="d_minat" class="mb-0 fw-bold text-dark"></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function showDetailSiswa(nama, jenjang, sekolah, kelas, minat) {
        document.getElementById('d_nama').innerText = nama;
        document.getElementById('d_jenjang').innerText = jenjang;
        document.getElementById('d_sekolah').innerText = sekolah;
        document.getElementById('d_kelas').innerText = kelas;
        document.getElementById('d_minat').innerText = minat;
        document.getElementById('d_img').src = "https://ui-avatars.com/api/?name=" + nama + "&background=random";
        new bootstrap.Modal(document.getElementById('modalDetailSiswa')).show();
    }

    function filterSiswa() {
        let keyword = document.getElementById('searchSiswa').value.toLowerCase();
        let jenjang = document.getElementById('filterJenjang').value;
        let rows = document.querySelectorAll('#tableSiswa tbody tr');

        rows.forEach(row => {
            let nama = row.querySelector('.nama-col').textContent.toLowerCase();
            let jg = row.querySelector('.jenjang-col').textContent;
            
            let matchName = nama.includes(keyword);
            let matchJenjang = jenjang === "" || jg === jenjang;
            
            row.style.display = (matchName && matchJenjang) ? "" : "none";
        });
    }
</script>