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
                        <strong>Edit</strong> Submenu
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $submenuid['id']; ?>">
                            <div class="form-group">
                                <label class=" form-control-label">Role:</label>
                                <select name="menu_id" id="menu_id" class="form-control-label">
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Title</label>
                                <input type="text" name='title' class="form-control" id="title" value="<?= $submenuid['title']; ?>">
                                <?= form_error('title', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Url</label>
                                <input type="text" name='url' class="form-control" id="url" value="<?= $submenuid['url']; ?>">
                                <?= form_error('url', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Icon</label>
                                <input type="text" name='icon' class="form-control" id="icon" value="<?= $submenuid['icon']; ?>">
                                <?= form_error('icon', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_active" id="is_active" value="0">
                                    <label class="form-check-label" for="is_active">
                                        Not Active
                                    </label>
                                </div>
                                <?= form_error('is_active', '<small class="form-text text-danger">', '</small>') ?>
                            </div>
                            <!-- <div class="form-group">
                                <label class=" form-control-label"></label>
                                <input type="text" name='menu' class="form-control" id="menu" value="<?= $menu['menu']; ?>">
                                <?= form_error('menu', '<small class="form-text text-danger">', '</small>') ?>
                            </div> -->
                            <button type="submit" class="btn social twitter float-right">Edit</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->