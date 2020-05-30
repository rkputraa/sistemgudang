<<?php var_dump($user); ?> <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data</strong> User
                    </div>
                    <div class="card-body">
                        <a class="btn social twitter" href="hometambahuser.php">Tambah User</a> <br><br>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Id User</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($user as $usr) : ?>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><?= $usr['id'];  ?></td>
                                        <td><?= $usr['nama'];  ?></td>
                                        <td><?= $usr['jenis_kelamin'];  ?></td>
                                        <td><?= $usr['jabatan'];  ?></td>
                                        <td><a class="btn social tumblr" href="homedetailuser.php">Detail</a>
                                            <a class="btn social youtube" href="#">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
    </div><!-- .content -->