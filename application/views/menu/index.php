<title><?= $judul; ?></title>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <strong>Manajemen</strong> Menu
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
                                <a class="btn social twitter" href="<?= base_url('menu/tambah') ?>">Tambah Menu</a>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <!-- </div>? -->
                        <div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($menu as $m) : ?>
                                            <tr>
                                                <td scope="row"><?= $i++ ?></td>
                                                <td><?= $m['menu']; ?></td>
                                                <td>
                                                    <!-- <div class="btn-group"> -->
                                                    <a class="fa fa-pencil btn social spotify" href="<?= base_url(); ?>menu/edit/<?= $m['id']; ?>"></a>
                                                    <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>menu/hapus/<?= $m['id']; ?>"></a>
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