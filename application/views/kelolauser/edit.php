<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Edit</strong> Karyawan</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Data</strong> Karyawan
                    </div>
                    <div class="card-body">
                        <!-- <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?> -->
                        <form action="" method="post">
                            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                            <div class="form-group">
                                <label class=" form-control-label" for="username">Username</label>
                                <input type="text" name='username' class="form-control" id="username" value="<?= $user['username']; ?>">
                                <?= form_error('username', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_user">Nama Karyawan</label>
                                <input type="text" name='nama_user' class="form-control" id="nama_user" value="<?= $user['nama_user']; ?>">
                                <?= form_error('nama_user', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="password">Password</label>
                                <input type="password" name='password' class="form-control" id="password" value="<?= $user['password']; ?>">
                                <?= form_error('password', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit Karyawan</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->