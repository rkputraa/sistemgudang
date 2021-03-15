<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Tambah</strong> Barang Keluar</h1>
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
                                <label class=" form-control-label" for="id_barang_keluar">ID Barang Keluar</label>
                                <input type="number" name='id_barang_keluar' class="form-control" id="id_barang_keluar">
                                <?= form_error('id_barang_keluar', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="tanggal">Tanggal</label>
                                <input type="date" name='tanggal' class="form-control" id="tanggal">
                                <?= form_error('tanggal', '<small class="form-text text-danger">', '</small>') ?>
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
                            <div class="form-group">
                                <label class=" form-control-label" for="jumlah_keluar">Jumlah Keluar</label>
                                <input type="number" name='jumlah_keluar' class="form-control" id="jumlah_keluar">
                                <?= form_error('jumlah_keluar', '<small class="form-text text-danger">', '</small>') ?>
                            </div>

                            <!-- <div class="form-group">
                                <label class=" form-control-label" for="harga_modal">Harga Modal</label>
                                <select class="form-control" name='id_barang' id="id_barang">
                                    <option selected></option>
                                    <?php foreach ($barang as $b) : ?>
                                        <option value="<?= $b['id_barang'] ?>"><?= $b['harga_modal'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('id_distributor', '<small class="form-text text-danger">', '</small>') ?>
                            </div> -->

                            <!-- ganti -->
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_modal">Harga Modal</label>
                                <input type="number" name='harga_modal' class="form-control" id="harga_modal">
                                <?= form_error('harga_modal', '<small class="form-text text-danger">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label" for="total_biaya_keluar">Total Biaya Keluar</label>
                                <input type="number" name='total_biaya_keluar' class="form-control" id="total_biaya_keluar">
                                <?= form_error('total_biaya_keluar', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Tambah</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->