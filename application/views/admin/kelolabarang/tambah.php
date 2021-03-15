<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Tambah</strong> Barang</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Input</strong> Barang
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class=" form-control-label" for="id_barang">ID Barang</label>
                                <input type="number" name='id_barang' class="form-control" id="id_barang">
                                <?= form_error('id_barang', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_barang">Nama Barang</label>
                                <input type="text" name='nama_barang' class="form-control" id="nama_barang">
                                <?= form_error('nama_barang', '<small class="form-text text-danger">', '</small>') ?>
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
                                <label class=" form-control-label" for="harga_modal">Harga Modal</label>
                                <input type="number" name='harga_modal' class="form-control" id="harga_modal">
                                <?= form_error('harga_modal', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_jual">Harga Jual</label>
                                <input type="number" name='harga_jual' class="form-control" id="harga_jual">
                                <?= form_error('harga_jual', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Tambah Barang</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->