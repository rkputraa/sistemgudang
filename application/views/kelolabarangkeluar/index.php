<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Barang</strong> Keluar
                    </div>
                    <div class="card-body">
                        <div>
                            <a class="btn social twitter" href="<?= base_url() ?>kelolabarangkeluar/tambah">Tambah Barang Keluar</a>
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
                                    <th scope="col">Jumlah Keluar</th>
                                    <th scope="col">Harga Modal</th>
                                    <th scope="col">Total Biaya Keluar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($barang_keluar as $brk) : ?>
                                    <tr>
                                        <td scope="row"><?= $no++ ?></td>
                                        <td><?= $brk['tanggal'];  ?></td>
                                        <td><?= $brk['id_barang'];  ?></td>
                                        <td><?= $brk['nama_barang'];  ?></td>
                                        <td><?= $brk['id_distributor'];  ?></td>
                                        <td><?= $brk['nama_distributor'];  ?></td>
                                        <td><?= $brk['jumlah_keluar'];  ?></td>
                                        <td><?= $brk['harga_modal'];  ?></td>
                                        <td><?= $brk['total_biaya_keluar'];  ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>kelolabarangkeluar/edit/<?= $brk['id_barang_keluar']; ?>"></a>
                                                <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>kelolabarangkeluar/hapus/<?= $brk['id_barang_keluar']; ?>"></a>
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
    </div> <!-- .animated -->
</div><!-- .content -->