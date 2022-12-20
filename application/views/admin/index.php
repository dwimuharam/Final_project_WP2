<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4"><?= $judul; ?></h2>
            <div class="row mt-3">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <i class="fas fa-fw fa-solid fa-landmark"></i>
                            <h3><?= $daftar_kelas; ?></h3>
                            <p>Kelas</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('daftarkelas'); ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <i class="fas fa-fw fa-solid fa-user-check"></i>
                            <h3><?= $daftar_member; ?></h3>
                            <p>Member Aktif</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('daftaruser'); ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <i class="fas fa-fw fa-solid fa-user-shield"></i>
                            <h3><?= $daftar_admin; ?></h3>
                            <p>Admin</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('daftaruser'); ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <i class="fas fa-fw fa-solid fa-film"></i>
                            <h3><?= $detail_invoice; ?></h3>
                            <p>Terdaftar Kelas</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('invoice'); ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
    </main>