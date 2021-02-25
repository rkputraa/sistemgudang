<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Edit</strong> Unit Usaha</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Data</strong> Unit Usaha
                    </div>
                    <div class="card-body">
                        <!-- <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?> -->

                        <!-- value="<?= $user['username']; ?>" -->

                        <form action="" method="post">
                            <input type="hidden" name="id_unit" value="<?= $unit_usaha['id_unit']; ?>">

                            <div class="form-group">
                                <label class=" form-control-label" for="nama_unit">Nama Unit Usaha</label>
                                <input type="text" name='nama_unit' class="form-control" id="nama_unit" value="<?= $unit_usaha['nama_unit']; ?>">
                                <?= form_error('nama_unit', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="alamat_unit">Alamat Unit Usaha</label>
                                <input type="text" name='alamat_unit' class="form-control" id="alamat_unit" value="<?= $unit_usaha['alamat_unit']; ?>">
                                <?= form_error('alamat_unit', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="kontak_unit">Kontak Unit Usaha</label>
                                <input type="text" name='kontak_unit' class="form-control" id="kontak_unit" value="<?= $unit_usaha['kontak_unit']; ?>">
                                <?= form_error('kontak_unit', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit Unit Usaha</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->