<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?></h2>

            <div class="row">
                <div class="col-lg">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>ID Invoice</th>
                            <th>Nama Pendaftar</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Batas Pembayaran</th>
                            <th>Action</th>
                        </tr>

                        <?php foreach ($invoice as $inv) : ?>
                            <tr>
                                <td><?= $inv->id ?></td>
                                <td><?= $inv->name ?></td>
                                <td><?= $inv->tgl_pesan ?></td>
                                <td><?= $inv->batas_bayar ?></td>
                                <td><?= anchor('invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>'); ?></td>
                            </tr>

                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
    </main>