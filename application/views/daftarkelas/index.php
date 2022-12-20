<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?></h2>

            <div class="row">
                <div class="col-lg">

                    <?= $this->session->flashdata('message'); ?>
                    <a href="<?= base_url('daftarkelas/addkelas'); ?>" class="btn btn-primary mb-3">Tambahkan Kelas Baru</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kelas</th>
                                <th scope="col">Nama Mentor</th>
                                <th scope="col">Status</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($dftrkelas as $kls) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $kls['nama_produk']; ?></td>
                                    <td><?= $kls['nama_mentor']; ?></td>
                                    <td><?= $kls['is_active']; ?></td>
                                    <td><?= $kls['harga']; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/upload/') . $kls['image']; ?>" width="150">
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>daftarkelas/edit_data/<?= $kls['id_produk']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td onclick="javascript: return confirm('Anda yakin akan menghapus <?= $kls['nama_produk']; ?>?')">
                                        <a href="<?= base_url(); ?>daftarkelas/hapusdata/<?= $kls['id_produk']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

    </main>