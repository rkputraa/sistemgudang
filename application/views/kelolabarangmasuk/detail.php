<?php var_dump($barang_masuk); ?>
<div class="content mt-3">
    <div class="col-lg-10">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong>Detail</strong> Stok Barang
                </div>
                <div class="card-body card-block">
                    <form action="" class="form-horizontal">
                        <?php foreach ($barang_masuk as $brk) : ?>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Tanggal</label></div>
                                <div class="col-12 col-md-9"><?= $brk['tanggal'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">ID Barang</label></div>
                                <div class="col-12 col-md-9"><?= $brk['id_barang'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Nama Barang</label></div>
                                <div class="col-12 col-md-9"><?= $brk['nama_barang'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">ID Distributor</label></div>
                                <div class="col-12 col-md-9"><?= $brk['id_distributor'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Nama Distributor</label></div>
                                <div class="col-12 col-md-9"><?= $brk['nama_distributor'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Jumlah Masuk</label></div>
                                <div class="col-12 col-md-9"><?= $brk['jumlah_masuk'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Harga Modal</label></div>
                                <div class="col-12 col-md-9"><?= $brk['harga_modal'];  ?></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Total Biaya Masuk</label></div>
                                <div class="col-12 col-md-9"><?= $brk['total_biaya_masuk'];  ?></div>
                            </div>
                        <?php endforeach; ?>
                    </form>
                    <div class="row form-group">
                        <a class="btn social tumblr" href="<?= base_url() ?>kelolabarangmasuk">Kembali</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->