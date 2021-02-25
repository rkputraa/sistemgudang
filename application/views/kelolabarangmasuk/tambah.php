<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Tambah</strong> Barang Masuk</h1>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Input</strong> Barang
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label class=" form-control-label" for="tanggal_masuk">Tanggal</label>
                                <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_distri">Distributor</label>
                                <select type="text" class="custom-select" id="nama_distri" name="nama_distri">
                                    <option>Indofood</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="nama_barang">Nama Barang</label>
                                <select type="text" class="custom-select" id="nama_barang" name="nama_barang">
                                    <option>indomie goreng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="id_barang">id barang</label>
                                <select type="number" class="custom-select" id="id_barang" name="id_barang">
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="jumlah_kuantitas">Kuantitas</label>
                                <input class="form-control" type="number" id="jumlah_kuantitas" name="jumlah_kuantitas">
                                <select class="custom-select" id="kuantitas" name="kuantitas">
                                    <option>dus</option>
                                </select>
                                <small class="form-text text-muted">contoh: 10 Dus, 10 Pack</small>
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label" for="jumlah_item">Jumlah Item</label>
                                <input class="form-control" type="number" id="jumlah_item" name="jumlah_item">
                                <small class="form-text text-muted">jumlah isi barang</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="total_jumlah_item">Total Jumlah Item</label>
                                <input class="form-control" type="number" id="total_jumlah_item" name="total_jumlah_item">
                                <small class="form-text text-muted">kuantitas dikali banyaknya jumlah item</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_barang_satuan">Harga Barang Satuan</label>
                                Rp<input class="form-control" type="number" id="harga_barang_satuan" name="harga_barang_satuan">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label" for="harga_barang_keseluruhan">Harga Barang Keseluruhan</label>
                                Rp<input class="form-control" type="number" id="harga_barang_keseluruhan" name="harga_barang_keseluruhan">
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Tambah Barang Masuk</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->