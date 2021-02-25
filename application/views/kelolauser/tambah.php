<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Tambah</strong> Karyawan</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Input</strong> Data Karyawan
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('auth/registration'); ?>" method="post">
                            <div class="form-group">
                                <label class=" form-control-label" for="id_user">ID Karyawan</label>
                                <input type="number" name='id_user' class="form-control" id="id_user">
                                <?= form_error('id_user', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="username">Username</label>
                                <input type="text" name='username' class="form-control" id="username">
                                <?= form_error('username', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="password">Password</label>
                                <input type="text" name='password' class="form-control" id="password">
                                <?= form_error('password', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_user">Nama Karyawan</label>
                                <input type="text" name='nama_user' class="form-control" id="nama_user">
                                <?= form_error('nama_user', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Tambah Karyawan</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->