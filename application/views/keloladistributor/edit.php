<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Edit</strong> Distributor</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Data</strong> Distributor
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_distributor" value="<?= $distributor['id_distributor']; ?>">
                            <!-- <div class="form-group">
                                <label class=" form-control-label" for="id_barang">Id Barang</label>
                                <input type="number" name='id_barang' class="form-control" id="id_barang" value="<?= $barang['id_barang']; ?>">
                            </div> -->
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_distributor">Nama Distributor</label>
                                <input type="text" name='nama_distributor' class="form-control" id="nama_distributor" value="<?= $distributor['nama_distributor']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="alamat_distributor">Alamat Distributor</label>
                                <input type="text" name='alamat_distributor' class="form-control" id="alamat_distributor" value="<?= $distributor['alamat_distributor']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="kontak_distributor">Kontak Distributor</label>
                                <input type="text" name='kontak_distributor' class="form-control" id="kontak_distributor" value="<?= $distributor['kontak_distributor']; ?>">
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit Distributor</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->