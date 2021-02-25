<!-- <!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $judul; ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url("media/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/font-awesome/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/themify-icons/css/themify-icons.css"); ?> ">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/flag-icon-css/css/flag-icon.min.css"); ?> ">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/selectFX/css/cs-skin-elastic.css"); ?> ">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/jqvmap/dist/jqvmap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"); ?>">


    <link rel="stylesheet" href="<?php echo base_url("media/assets/css/style.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/chosen/chosen.min.css"); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head> -->

<title><?= $judul; ?></title>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <span><i class="menu-icon fa fa-sign-in"></i> Registrasi</span>
                </div>
                <div class="login-form">
                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                        <div class="form-group">
                            <label><i class="menu-icon fa fa-user"></i> Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label><i class="menu-icon fa fa-user"></i> Nama</label>
                            <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama" value="<?= set_value('nama_user'); ?>">
                            <?= form_error('nama_user', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label><i class="menu-icon fa fa-lock"></i> Password</label>
                                <input type="password" class="form-control" name="password1" id="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <label><i class="menu-icon fa fa-lock"></i> Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password">
                            </div>
                        </div>
                        <br><br><br><br>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
                    </form>
                    <div class="container">
                        <i><small>&copy;Sistem Informasi Universitas Tanjungpura</small></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
    <script src="<?php echo base_url("media/vendors/jquery/dist/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/popper.js/dist/umd/popper.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/assets/js/main.js"); ?>"></script>


    <script src="<?php echo base_url("media/vendors/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/jszip/dist/jszip.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/pdfmake/build/pdfmake.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/pdfmake/build/vfs_fonts.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/datatables.net-buttons/js/buttons.html5.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/datatables.net-buttons/js/buttons.print.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/datatables.net-buttons/js/buttons.colVis.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/assets/js/init-scripts/data-table/datatables-init.js"); ?>"></script>


    <script src="<?php echo base_url("media/vendors/chart.js/dist/Chart.bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/assets/js/dashboard.js"); ?>"></script>
    <script src="<?php echo base_url("media/assets/js/widgets.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/jqvmap/dist/jquery.vmap.min.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"); ?>"></script>
    <script src="<?php echo base_url("media/vendors/jqvmap/dist/maps/jquery.vmap.world.js"); ?>"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html> -->