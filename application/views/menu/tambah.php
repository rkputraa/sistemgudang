<div class="breadcrumbs">
    <div class="col-sm-4">
        <!-- <div class="page-header float-left">
            <div class="page-title">
                <h1><strong>Tambah</strong> Karyawan</h1>
            </div>
        </div> -->
    </div>
    <div class="content mt-3">
        <div class="col-lg-10">
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <strong>Input</strong> Data Menu
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class=" form-control-label">Nama Menu</label>
                                <input type="text" name='menu' class="form-control" id="menu" placeholder="Masukkan nama menu">
                                <?= form_error('menu', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Tambah Menu</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->