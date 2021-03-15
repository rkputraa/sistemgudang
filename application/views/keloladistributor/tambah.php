<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Tambah</strong> Distributor</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Input</strong> Distributor
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class=" form-control-label" for="id_distributor">ID Distributor</label>
                                <input type="number" name='id_distributor' class="form-control" id="id_distributor">
                                <?= form_error('id_distributor', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_distributor">Nama Distributor</label>
                                <input type="text" name='nama_distributor' class="form-control" id="nama_distributor">
                                <?= form_error('nama_distributor', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="alamat_distributor">Alamat Distributor</label>
                                <input type="text" name='alamat_distributor' class="form-control" id="alamat_distributor">
                                <?= form_error('alamat_distributor', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="kontak_distributor">Kontak Distributor</label>
                                <input type="text" name='kontak_distributor' class="form-control" id="kontak_distributor">
                                <?= form_error('kontak_distributor', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="ordering_cost">Ordering Cost</label>
                                <input type="number" name='ordering_cost' class="form-control" id="ordering_cost">
                                <?= form_error('ordering_cost', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="lead_time">Lead Time</label>
                                <input type="number" name='lead_time' class="form-control" id="lead_time">
                                <?= form_error('lead_time', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Tambah Distributor</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->