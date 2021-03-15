<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Edit</strong> Barang Masuk</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Data</strong> Barang Masuk
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_barang_masuk" value="<?= $barang_masuk['id_barang_masuk']; ?>">
                            <div class="form-group">
                                <label class=" form-control-label" for="tanggal">Tanggal</label>
                                <input type="date" name='tanggal' class="form-control" id="tanggal" value="<?= $barang_masuk['tanggal']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="barang">Nama Barang</label>
                                <select class="form-control" name='id_barang' id="id_barang">
                                    <?php foreach ($barang as $b) : ?>
                                        <?php if ($b['id_barang'] == $barang['id_barang']) : ?>
                                            <option value="<?= $b['id_barang']; ?>" selected><?= $b['nama_barang']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $b['id_barang']; ?>"><?= $b['nama_barang']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="distributor">Nama Distributor</label>
                                <select class="form-control" name='id_distributor' id="id_distributor">
                                    <?php foreach ($distributor as $d) : ?>
                                        <?php if ($d['id_distributor'] == $distributor['id_distributor']) : ?>
                                            <option value="<?= $d['id_distributor']; ?>" selected><?= $d['nama_distributor']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d['id_distributor']; ?>"><?= $d['nama_distributor']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="jumlah_masuk">Jumlah Masuk</label>
                                <input type="number" name='jumlah_masuk' class="form-control" id="jumlah_masuk" value="<?= $barang_masuk['jumlah_masuk']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_modal">Harga Modal</label>
                                <input type="number" name='harga_modal' class="form-control" id="harga_modal" value="<?= $barang_masuk['harga_modal']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="total_biaya_masuk">Total Biaya Masuk</label>
                                <input type="number" name='total_biaya_masuk' class="form-control" id="total_biaya_masuk" value="<?= $barang_masuk['total_biaya_masuk']; ?>">
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->