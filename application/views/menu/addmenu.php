<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?></h2>
            <form action="<?= base_url('menu/addmenu'); ?>" method="post">
                <div class="form-group col-md-5 mb-3">
                    <?= form_error('addmenu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <input type="text" class="form-control" id="addmenu" name="addmenu" placeholder="Menu name">
                </div>
                <a href="<?= base_url('menu'); ?>" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
    </main>