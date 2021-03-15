<!-- <?php var_dump($barang_masuk); ?>  -->
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Penjualan</strong>
                    </div>
                    <div class="card-body">
                        <div>
                            <a class="btn social twitter" href="<?= base_url() ?>penjualan/tambah">Tambah</a>
                            <br> <br>
                        </div>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">ID Distributor</th>
                                    <th scope="col">Nama Distributor</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Jumlah Terjual</th>
                                    <th scope="col">Pendapatan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($penjualan as $p) : ?>
                                    <tr>
                                        <td scope="row"><?= $no++ ?></td>
                                        <td><?= $p['id_barang'];  ?></td>
                                        <td><?= $p['nama_barang'];  ?></td>
                                        <td><?= $p['id_distributor'];  ?></td>
                                        <td><?= $p['nama_distributor'];  ?></td>
                                        <td><?= $p['harga_jual'];  ?></td>
                                        <td><?= $p['jumlah_terjual'];  ?></td>
                                        <td><?= $p['pendapatan'];  ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>penjualan/edit/<?= $p['id_penjualan']; ?>"></a>
                                                <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>penjualan/hapus/<?= $p['id_penjualan']; ?>"></a>
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