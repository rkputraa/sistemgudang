<?php var_dump($barangklr); ?>
<div class="content mt-3">
    <div class="col-lg-10">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong>Detail</strong> Stok Barang
                </div>
                <div class="card-body card-block">
                    <form action="" class="form-horizontal">
                        <?php foreach ($barangklr as $brk) : ?>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Tanggal</label></div>
                                <div class="col-12 col-md-9"><?= $brk['tanggal'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Distributor</label></div>
                                <div class="col-12 col-md-9"><?= $brk['distributor'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kode Barang</label></div>
                                <div class="col-12 col-md-9"><?= $brk['kode_barang'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Nama Barang</label></div>
                                <div class="col-12 col-md-9"><?= $brk['nama_barang'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kuantitas</label></div>
                                <div class="col-12 col-md-9"><?= $brk['kuantitas'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Total Jumlah Item</label></div>
                                <div class="col-12 col-md-9"><?= $brk['total_item'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Harga Barang Keseluruhan</label></div>
                                <div class="col-12 col-md-9"><?= $brk['harga_barang_keseluruhan'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Harga Barang per item</label></div>
                                <div class="col-12 col-md-9"><?= $brk['harga_barang_satuan'];  ?></div>
                            </div>
                        <?php endforeach; ?>
                    </form>
                    <div class="row form-group">
                        <a class="btn social tumblr" href="<?= base_url() ?>kelolabarangkeluar">Kembali</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->