<?php var_dump($barangklr); ?> <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Barang</strong> Keluar
                    </div>
                    <div class="card-body">
                        <a class="btn social twitter" href="#">Tambah Barang Keluar</a><br>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Distributor</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama barang</th>
                                    <th scope="col">Jumlah Keluar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($barangklr as $brk) : ?>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><?= $brk['tanggal'];  ?></td>
                                        <td><?= $brk['distributor'];  ?></td>
                                        <td><?= $brk['kode_barang'];  ?></td>
                                        <td><?= $brk['nama_barang'];  ?></td>
                                        <td><?= $brk['total_item'];  ?></td>
                                        <td><a class="btn social spotify" href="#">Edit</a>
                                            <a class="btn social tumblr" href="<?= base_url() ?>kelolabarangkeluar/detail">Detail</a>
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
    </div> <!-- .animated -->
</div><!-- .content -->