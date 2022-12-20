<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?></h2>
            <form action="<?= base_url('daftarkelas/addkelas'); ?>" method="post">
                <div class="form-group col-md-5 mb-3">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Kelas">
                </div>
                <div class="form-group col-md-5 mb-3">
                    <input type="text" class="form-control" id="nama_mentor" name="nama_mentor" placeholder="Nama Mentor">
                </div>
                <div class="form-group col-md-5 mb-3">
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                </div>
                <div class="form-group mb-3">
                    <label for="image">Upload Thumbnail</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div class="form-group mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                </div>
                <a href="<?= base_url('daftarkelas'); ?>" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
    </main>