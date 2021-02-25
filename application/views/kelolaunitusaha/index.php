<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data</strong> Unit Usaha
                    </div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row-mt-3">
                            <div class="col-sm-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Selesai</span> Data Unit Usaha <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                                <a class="btn social twitter" href="<?= base_url(); ?>kelolaunitusaha/tambah">Tambah Unit Usaha</a>
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

                    <?php if (empty($unit_usaha)) : ?>
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
                                    <th scope="col">Id Unit Usaha</th>
                                    <th scope="col">Nama Unit Usaha</th>
                                    <th scope="col">Alamat Unit Usaha</th>
                                    <th scope="col">Kontak Unit Usaha</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($unit_usaha as $un) : ?>
                                    <tr>
                                        <td scope="row"><?= $no++ ?></td>
                                        <td><?= $un['id_unit'];  ?></td>
                                        <td><?= $un['nama_unit'];  ?></td>
                                        <td><?= $un['alamat_unit'];  ?></td>
                                        <td><?= $un['kontak_unit'];  ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>kelolaunitusaha/edit/<?= $un['id_unit']; ?>"></a>
                                                <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>kelolaunitusaha/hapus/<?= $un['id_unit']; ?>"></a>
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