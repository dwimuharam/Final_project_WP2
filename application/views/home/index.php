<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Temukan Bakat Kreatifmu Bersama Kami!</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Pelajari dan Perdalam Skill Kreatifmu di sini bersama Puluhan Ribu Member Lainnya.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#kelasbaru">Lihat Kelas Terbaru</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="<?= base_url('kelas'); ?>">Katalog Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?= base_url('assets/img/foto1.jpg'); ?>" /></div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">Kenapa Harus Belajar disini?</h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-sharp fa-solid fa-hourglass"></i></div>
                        <h2 class="h5">Akses Selamanya</h2>
                        <p class="mb-0">Hanya dengan Sekali Bayar saja, Akses Selamanya Materi</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-solid fa-handshake"></i></div>
                        <h2 class="h5">Konsultasi Dengan Mentor</h2>
                        <p class="mb-0">Jika Anda Kesulitan dalam Proses Belajar, Tanyakan saja Kepada Mentor</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-solid fa-check"></i></div>
                        <h2 class=" h5">Free Update Materi</h2>
                        <p class="mb-0">Gratis Materi Terbaru secara Rutin</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fas fa-solid fa-star"></i></div>
                        <h2 class="h5">Sertifikat Kelas</h2>
                        <p class="mb-0">Dapatkan Sertifikat dengan Menyelesaikan Materi di Kelas</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Testimonial section-->
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"Saya baru sekali ikut kelas online, alhamdulillah dapat kelas dan mentor yang tepat di Graphic Class. Materi berkelas, tapi harga bersahabat."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="rounded-circle me-3" src="<?= base_url('assets/img/jajang.jpg'); ?>" />
                        <div class="fw-bold">
                            Jajang Sukmara
                            <span class="fw-bold text-primary mx-1">/</span>
                            Graphic Designer at Tokopedia
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog preview section-->
<section class="py-5" id="kelasbaru">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Kelas Terbaru</h2>
                    <p class="lead fw-normal text-muted mb-5">Pilih Kelas yang Baru dirilis dengan Materi-materi yang Fresh</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?= base_url('assets/img/kelas1.jpg'); ?>" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">All Level</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Mastering Corel Draw for Graphic Design</h5>
                        </a>
                        <p class="card-text mb-0">Belajar Membuat Desain menggunakan Software CorelDRAW dari dasar - intermediate level.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="<?= base_url('assets/img/bambang.jpg'); ?>" />
                                <div class="small">
                                    <div class="fw-bold">Bambang Santoso</div>
                                    <div class="text-muted">Mentor sejak 2019</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?= base_url('assets/img/kelas2.jpg'); ?>" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">All Level</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">WPAP Illustration Mastery</h5>
                        </a>
                        <p class="card-text mb-0">Belajar membuat Ilustrasi WPAP menggunakan Adobe Illustrator.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="<?= base_url('assets/img/zeldin.jpg'); ?>" />
                                <div class="small">
                                    <div class="fw-bold">Zeldin Annisa Syahdani</div>
                                    <div class="text-muted">Mentor Sejak 2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?= base_url('assets/img/kelas3.jpg'); ?>" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">All Level</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Mastering 3D Icons With Blender</h5>
                        </a>
                        <p class="card-text mb-0">Belajar Membuat 3D Icons dan Ilustrasi dengan Style Minimalist dari Dasar dan Terstruktur.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="<?= base_url('assets/img/zulfa.jpg'); ?>" />
                                <div class="small">
                                    <div class="fw-bold">Zulfa Aryanti</div>
                                    <div class="text-muted">Mentor Sejak 2019</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>