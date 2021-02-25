<?php var_dump($barang_masuk); ?> <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Barang</strong> Masuk
                    </div>
                    <div class="card-body">
                        <div>
                            <a class="btn social twitter" href="<?= base_url() ?>kelolabarangmasuk/tambah">Tambah Barang Masuk</a>
                            <br> <br>
                        </div>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">ID Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">ID Distributor</th>
                                    <th scope="col">Nama Distributor</th>
                                    <th scope="col">Jumlah Masuk</th>
                                    <th scope="col">Harga Modal</th>
                                    <th scope="col">Total_biaya_masuk</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($barang_masuk as $brm) : ?>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><?= $brm['tanggal'];  ?></td>
                                        <td><?= $brm['id_barang'];  ?></td>
                                        <td><?= $brm['nama_barang'];  ?></td>
                                        <td><?= $brm['id_distributor'];  ?></td>
                                        <td><?= $brm['nama_distributor'];  ?></td>
                                        <td><?= $brm['jumlah_masuk'];  ?></td>
                                        <td><?= $brm['harga_modal'];  ?></td>
                                        <td><?= $brm['total_biaya_masuk'];  ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="fa fa-pencil btn social spotify" href="#"></a>
                                                <a class="fa fa-trash-o btn social youtube" href="#"></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .animated -->
</div><!-- .content -->