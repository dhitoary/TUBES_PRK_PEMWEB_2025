<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Tutor</h1>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTutor">
        <i class="fas fa-plus"></i> Tambah Tutor
    </button>
</div>

<div class="card border-0 shadow-sm mb-4">
    <div class="card-body p-3">
        <div class="row g-2">
            <div class="col-md-3">
                <select id="filterKategori" class="form-select border-0 bg-light" onchange="filterTable()">
                    <option value="">Semua Kategori</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Koding">Koding</option>
                </select>
            </div>
            <div class="col-md-3">
                <select id="filterStatus" class="form-select border-0 bg-light" onchange="filterTable()">
                    <option value="">Semua Status</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Cuti">Cuti</option>
                </select>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control border-0 bg-light" placeholder="Cari nama tutor..." onkeyup="filterTable()">
                    <button class="btn btn-light text-secondary"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="tutorTable">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4">Tutor</th>
                        <th>Keahlian</th>
                        <th>Bergabung</th>
                        <th>Status</th>
                        <th class="text-end pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=random" class="rounded-circle me-3" width="40">
                                <div>
                                    <div class="fw-bold name-col">Budi Santoso</div>
                                    <div class="small text-muted">budi@scholar.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary bg-opacity-10 text-primary category-col">Matematika</span></td>
                        <td>12 Jan 2025</td>
                        <td><span class="badge bg-success status-col">Aktif</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-light text-info" onclick="showDetailTutor('Budi Santoso', 'budi@scholar.com', 'Matematika', 'Aktif', 'S1 Pendidikan Matematika UNPAD')"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-light text-primary" onclick="editTutor('Budi Santoso', 'Matematika', 'Aktif')"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-light text-danger" onclick="confirmAction('Hapus tutor ini?').then((res)=>{if(res.isConfirmed) showToast('Data dihapus')})"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Jessica+M&background=random" class="rounded-circle me-3" width="40">
                                <div>
                                    <div class="fw-bold name-col">Jessica Mila</div>
                                    <div class="small text-muted">jessica@scholar.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-danger bg-opacity-10 text-danger category-col">Bahasa Inggris</span></td>
                        <td>05 Feb 2025</td>
                        <td><span class="badge bg-secondary status-col">Cuti</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm btn-light text-info" onclick="showDetailTutor('Jessica Mila', 'jessica@scholar.com', 'Bahasa Inggris', 'Cuti', 'Sastra Inggris UI')"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-light text-primary" onclick="editTutor('Jessica Mila', 'Bahasa Inggris', 'Cuti')"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-light text-danger" onclick="confirmAction('Hapus tutor ini?').then((res)=>{if(res.isConfirmed) showToast('Data dihapus')})"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTutor" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Tambah Tutor Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formTutor">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputNama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori Keahlian</label>
                        <select class="form-select" id="inputKategori">
                            <option value="Matematika">Matematika</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Koding">Koding</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" id="inputStatus">
                            <option value="Aktif">Aktif</option>
                            <option value="Cuti">Non-Aktif/Cuti</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="simpanTutor()">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetailTutor" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title"><i class="fas fa-id-card me-2"></i>Detail Tutor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img id="detailImg" src="" class="rounded-circle shadow-sm mb-3" width="100">
                    <h4 id="detailNama" class="fw-bold mb-0"></h4>
                    <p id="detailEmail" class="text-muted"></p>
                    <span id="detailStatus" class="badge bg-success rounded-pill px-3"></span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted">Keahlian</span>
                        <strong id="detailKategori"></strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted">Pendidikan</span>
                        <strong id="detailEdu" class="text-end"></strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted">File CV</span>
                        <a href="#" class="text-decoration-none">Download PDF</a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer bg-light border-0">
                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showDetailTutor(nama, email, kategori, status, edukasi) {
        document.getElementById('detailNama').innerText = nama;
        document.getElementById('detailEmail').innerText = email;
        document.getElementById('detailKategori').innerText = kategori;
        document.getElementById('detailEdu').innerText = edukasi;
        document.getElementById('detailStatus').innerText = status;
    
        document.getElementById('detailImg').src = "https://ui-avatars.com/api/?name=" + nama + "&background=random&size=128";

        var myModal = new bootstrap.Modal(document.getElementById('modalDetailTutor'));
        myModal.show();
    }

    function filterTable() {
        let inputSearch = document.getElementById("searchInput").value.toLowerCase();
        let inputKategori = document.getElementById("filterKategori").value.toLowerCase();
        let inputStatus = document.getElementById("filterStatus").value.toLowerCase();
        
        let table = document.getElementById("tutorTable");
        let tr = table.getElementsByTagName("tr");

        for (let i = 1; i < tr.length; i++) {
            let tdName = tr[i].querySelector(".name-col").textContent.toLowerCase();
            let tdCat = tr[i].querySelector(".category-col").textContent.toLowerCase();
            let tdStat = tr[i].querySelector(".status-col").textContent.toLowerCase();

            if (tdName.includes(inputSearch) && 
                (inputKategori === "" || tdCat.includes(inputKategori)) &&
                (inputStatus === "" || tdStat.includes(inputStatus))) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    function editTutor(nama, kategori, status) {
        document.getElementById('modalTitle').innerText = "Edit Data Tutor";
        document.getElementById('inputNama').value = nama;
        document.getElementById('inputKategori').value = kategori;
        document.getElementById('inputStatus').value = status;
        new bootstrap.Modal(document.getElementById('modalTutor')).show();
    }

    function simpanTutor() {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(modal => bootstrap.Modal.getInstance(modal)?.hide());
        showToast("Data berhasil disimpan!", "success");
    }
</script>