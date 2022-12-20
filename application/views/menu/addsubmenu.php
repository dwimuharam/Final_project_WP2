<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?></h2>
            <form action="<?= base_url('menu/addsubmenu'); ?>" method="post">
                <div class="form-group col-md-5 mb-3">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Title">
                </div>
                <div class="form-group col-md-5 mb-3">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <option value="">Select Menu</option>
                        <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-5 mb-3">
                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL">
                </div>
                <div class="form-group col-md-5 mb-3">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                </div>
                <div class="form-group mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                </div>
                <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
    </main>