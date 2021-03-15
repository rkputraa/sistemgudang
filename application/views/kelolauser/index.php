<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data</strong> Karyawan
                    </div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row-mt-3">
                            <div class="col-sm-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Selesai</span> Data Karyawan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div>
                        <br>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn social twitter" href="<?= base_url(); ?>kelolauser/tambah">Tambah Karyawan</a>
                            </div>
                            <div class="col-md-6">
                                <form class="float-right" action="" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari Data..." name="keyword">
                                        <button class="fa fa-search btn social openid " type="submit"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <br>
                    </div>

                    <?php if (empty($user)) : ?>
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">Data tidak ditemukan</div>
                        </div>
                        <!-- </div> -->
                    <?php endif; ?>
                    <div class="container">
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <!-- <th scope="col">Id Karyawan</th> -->
                                    <th scope="col">Username</th>
                                    <th scope="col">Nama Karyawan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $usr) : ?>
                                    <tr>
                                        <td scope="row"><?= $no++ ?></td>
                                        <!-- <td><?= $usr['id_user'];  ?></td> -->
                                        <td><?= $usr['username'];  ?></td>
                                        <td><?= $usr['nama_user'];  ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>kelolauser/edit/<?= $usr['id_user']; ?>"></a>
                                                <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>kelolauser/hapus/<?= $usr['id_user']; ?>"></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->