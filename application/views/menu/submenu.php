<title><?= $judul; ?></title>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <strong>Manajemen</strong> Submenu
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;  ?>
                        <?= $this->session->flashdata('flash'); ?>

                        <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn social twitter" href="<?= base_url('menu/tambahsub') ?>">Tambah Submenu</a>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <!-- </div>? -->
                        <div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Url</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Active</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($subMenu as $sm) : ?>
                                            <tr>
                                                <td scope="row"><?= $i++ ?></td>
                                                <td><?= $sm['title']; ?></td>
                                                <td><?= $sm['menu']; ?></td>
                                                <td><?= $sm['url']; ?></td>
                                                <td><?= $sm['icon']; ?></td>
                                                <td><?= $sm['is_active']; ?></td>
                                                <td>
                                                    <!-- <div class="btn-group"> -->
                                                    <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>menu/editsub/<?= $sm['id']; ?>"></a>
                                                    <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>menu/hapussub/<?= $sm['id']; ?>"></a>
                                                    <!-- </div> -->
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
        </div>
    </div>
</div>
</div>
</div> <!-- .animated -->