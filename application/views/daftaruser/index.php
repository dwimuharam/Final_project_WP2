<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?></h2>

            <div class="row">
                <div class="col-lg">
                    <?= $this->session->flashdata('message'); ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Foto</th>
                                <th scope="col">ID</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Registrasi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($dftruser as $usr) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $usr['name']; ?></td>
                                    <td><?= $usr['email']; ?></td>
                                    <td><img src="<?= base_url('assets/img/profile/') . $usr['image']; ?>" width="100">
                                    </td>
                                    <td><?= $usr['role_id']; ?></td>
                                    <td><?= $usr['is_active']; ?></td>
                                    <td><?= date('d F Y', $usr['date_created']); ?></td>
                                    <td>
                                        <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td onclick="javascript: return confirm('Anda yakin akan menghapus <?= $usr['name']; ?>?')">
                                        <a href="<?= base_url(); ?>daftaruser/hapususer/<?= $usr['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

    </main>