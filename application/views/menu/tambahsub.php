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
                        <strong>Input</strong> SubMenu
                    </div>
                    <div class="card-body">
                        <!-- <form action="<?= base_url('menu/submenu'); ?>" method="post"> -->
                        <form action="" method="post">
                            <!-- <input type="hidden" name="is_active" value="1"> -->
                            <div class="form-group">
                                <select name="menu_id" id="menu_id" class="form-control-label">
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Submenu Title</label>
                                <input type="text" name='title' class="form-control" id="title" placeholder="Input title">
                                <?= form_error('title', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Url</label>
                                <input type="text" name='url' class="form-control" id="url" placeholder="Input url">
                                <?= form_error('url', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Icon</label>
                                <input type="text" name='icon' class="form-control" id="icon" placeholder="Input icon">
                                <?= form_error('icon', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
                                <?= form_error('is_active', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" class="btn social twitter float-right">Tambah</button><br>
                            <!-- <button type="submit" name="tambahsub" class="btn social twitter float-right">Tambah</button><br> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->