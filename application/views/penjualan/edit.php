<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Edit</strong> Barang Penjualan</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Data</strong> Barang Penjualan
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_penjualan" value="<?= $penjualan['id_penjualan']; ?>">
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
                                <label class=" form-control-label" for="harga_jual">Harga jual</label>
                                <input type="number" name='harga_jual' class="form-control" id="harga_jual" value="<?= $penjualan['harga_jual']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="jumlah_terjual">Jumlah terjual</label>
                                <input type="number" name='jumlah_terjual' class="form-control" id="jumlah_terjual" value="<?= $penjualan['jumlah_terjual']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="pendapatan">Pendapatan</label>
                                <input type="number" name='pendapatan' class="form-control" id="pendapatan" value="<?= $penjualan['pendapatan']; ?>">
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->