<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Barang</strong> Masuk
                    </div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row-mt-3">
                            <div class="col-sm-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Selesai</span>
                                    Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                                <a class="btn social twitter" href="<?= base_url(); ?>kelolabarang/tambah">Tambah Barang</a>
                            </div>
                            <div class="col-md-6">
                                <form class="float-right" action="" method="post">
                                    <div class="input-group mb-12">
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

                    <!-- <div class="card-body">
                        <div class="container row-mt-12">
                            <a class="btn social twitter" href="<?= base_url(); ?>kelolabarang/tambah">Tambah Barang</a>
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
                        </div>
                        <div>
                            <br><br>
                        </div> -->
                    <!-- <div class="container"> -->
                    <?php if (empty($barang)) : ?>
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
                                    <th scope="col">ID Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Id Distributor</th>
                                    <th scope="col">Nama Distributor</th>
                                    <th scope="col">Harga Modal</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($barang as $brg) : ?>
                                    <tr>
                                        <td scope="row"><?= $no++ ?></td>
                                        <td><?= $brg['id_barang'];  ?></td>
                                        <td><?= $brg['nama_barang'];  ?></td>
                                        <td><?= $brg['id_distributor'];  ?></td>
                                        <td><?= $brg['nama_distributor'];  ?></td>
                                        <td><?= $brg['harga_modal'];  ?></td>
                                        <td><?= $brg['harga_jual'];  ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>kelolabarang/edit/<?= $brg['id_barang']; ?>"></a>
                                                <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>kelolabarang/hapus/<?= $brg['id_barang']; ?>"></a>
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