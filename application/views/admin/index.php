<title><?= $judul; ?></title>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-6">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit Data</strong> Admin
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                            <input type="hidden" name="username" value="<?= $user['username']; ?>">
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_user">Nama</label>
                                <input type="text" name='nama_user' class="form-control" id="nama_user" value="<?= $user['nama_user']; ?>">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="password">Password</label>
                                <input type="password" name='password' class="form-control" id="password">
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div> <!-- .animated -->