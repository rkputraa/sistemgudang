<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data</strong> Distributor
                    </div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row-mt-3">
                            <div class="col-sm-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                    Data Distributor <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                                <a class="btn social twitter float-left" href="<?= base_url(); ?>keloladistributor/tambah">Tambah Distributor</a>
                            </div>
                            <div class="col-sm-6">
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

                    <!-- <div class="container row-mt-12">
                            <a class="btn social twitter float-right" href="<?= base_url(); ?>keloladistributor/tambah">Tambah Distributor</a>
                        </div>
                        <div>
                            <br>
                        </div>
                        <div class="container row-mt-12">
                            <div class="row-mt3">
                                <div class="col-md6">
                                    <form action="" method="post">
                                        <div class="input-group mb-12">
                                            <input type="text" class="form-control" placeholder="Cari Data..." name="keyword">
                                            <button class="fa fa-search btn social openid " type="submit"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->

                    <!-- <div class="container">
                            <?php if (empty($barang)) : ?>
                                <div class="alert alert-danger" role="alert">Data tidak ditemukan</div>
                        </div> -->

                <?php endif; ?>
                <div class="container">
                    <!-- <div class="card-body"> -->

                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">ID Distributor</th>
                                <th scope="col">Nama Distributor</th>
                                <th scope="col">Alamat Distributor</th>
                                <th scope="col">Kontak Distributor</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($distributor as $di) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $di['id_distributor'];  ?></td>
                                    <td><?= $di['nama_distributor'];  ?></td>
                                    <td><?= $di['alamat_distributor'];  ?></td>
                                    <td><?= $di['kontak_distributor'];  ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>keloladistributor/edit/<?= $di['id_distributor']; ?>"></a>
                                            <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>keloladistributor/hapus/<?= $di['id_distributor']; ?>"></a>
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
</div> <!-- .animated -->
</div><!-- .content -->