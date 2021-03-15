<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Tambah</strong> Penjualan</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Input</strong> Data
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class=" form-control-label" for="id_penjualan">ID Penjualan</label>
                                <input type="number" name='id_penjualan' class="form-control" id="id_penjualan">
                                <?= form_error('id_penjualan', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="barang">Barang</label>
                                <select class="form-control" name='id_barang' id="id_barang">
                                    <option selected></option>
                                    <?php foreach ($barang as $b) : ?>
                                        <option value="<?= $b['id_barang'] ?>"><?= $b['nama_barang'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('id_barang', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="distributor">Distributor</label>
                                <select class="form-control" name='id_distributor' id="id_distributor">
                                    <option selected></option>
                                    <?php foreach ($distributor as $d) : ?>
                                        <option value="<?= $d['id_distributor'] ?>"><?= $d['nama_distributor'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('id_distributor', '<small class="form-text text-danger">', '</small>') ?>
                            </div>

                            <!-- ganti -->
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_jual">Harga jual</label>
                                <input type="number" name='harga_jual' class="form-control" id="harga_jual">
                                <?= form_error('harga_jual', '<small class="form-text text-danger">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label" for="jumlah_terjual">Jumlah terjual</label>
                                <input type="number" name='jumlah_terjual' class="form-control" id="jumlah_terjual">
                                <?= form_error('jumlah_terjual', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="pendapatan">Pendapatan</label>
                                <input type="number" name='pendapatan' class="form-control" id="pendapatan">
                                <?= form_error('pendapatan', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Tambah</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->