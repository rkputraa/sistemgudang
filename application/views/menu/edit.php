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
                        <strong>Edit</strong> Data Menu
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                            <div class="form-group">
                                <label class=" form-control-label">Nama Menu</label>
                                <input type="text" name='menu' class="form-control" id="menu" value="<?= $menu['menu']; ?>">
                                <?= form_error('menu', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" name="tambah" class="btn social twitter float-right">Edit Menu</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->