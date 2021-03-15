<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Edit</strong> Barang</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Data</strong> Barang
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
                            <!-- <div class="form-group">
                                <label class=" form-control-label" for="id_barang">Id Barang</label>
                                <input type="number" name='id_barang' class="form-control" id="id_barang" value="<?= $barang['id_barang']; ?>">
                            </div> -->
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_barang">Nama Barang</label>
                                <input type="text" name='nama_barang' class="form-control" id="nama_barang" value="<?= $barang['nama_barang']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="distributor">Nama Distributor</label>
                                <select class="form-control" name='id_distributor' id="id_distributor">
                                    <?php foreach ($distributor as $d) : ?>
                                        <?php if ($d['id_distributor'] == $barang['id_distributor']) : ?>
                                            <option value="<?= $d['id_distributor']; ?>" selected><?= $d['nama_distributor']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d['id_distributor']; ?>"><?= $d['nama_distributor']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_modal">Harga Modal</label>
                                <input type="number" name='harga_modal' class="form-control" id="harga_modal" value="<?= $barang['harga_modal']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_jual">Harga Jual</label>
                                <input type="number" name='harga_jual' class="form-control" id="harga_jual" value="<?= $barang['harga_jual']; ?>">
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit Barang</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->