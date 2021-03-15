<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

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

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Query Menu -->
                <?php

                $role_id = $this->session->userdata('role_id');

                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu` 
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
                            ";

                $menu = $this->db->query($queryMenu)->result_array();
                // var_dump($menu);
                // die;
                ?>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h2 class="navbar-brand"><i class="fa fa-home"> Menu</i></h2>
                    <?php foreach ($menu as $m) : ?>

                        <!-- header menu -->
                        <!-- <h2 class="navbar-brand"><i class="fa fa-home"></i><?= $m['menu'] ?></h2> -->

                        <!-- sub menu -->
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                                    FROM `user_sub_menu` JOIN `user_menu` 
                                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                    WHERE `user_sub_menu`.`menu_id` = $menuId
                                    AND `user_sub_menu`.`is_active` = 1
                                    ";

                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>

                        <?php foreach ($subMenu as $sm) : ?>

                            <!-- <?php if ($judul == $sm['title']) : ?>
                                <li class="nav-item active">
                                <?php else : ?>
                                <li class="nav-item">
                                <?php endif; ?> -->
                            <li class="nav-item active">
                                <a href="<?= base_url($sm['url']);  ?>"><i class="<?= $sm['icon']; ?>"></i><?= $sm['title']; ?></a>
                            </li>

                        <?php endforeach; ?>
                    <?php endforeach; ?>


                    <!-- <li class="active">
                        <a href="<?= base_url();  ?>kelolauser"> <i class="menu-icon fa fa-users"></i>Kelola Karyawan</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url();  ?>kelolabarang"> <i class="menu-icon fa fa-columns"></i>Kelola Barang</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url();  ?>keloladistributor"> <i class="menu-icon fa fa-truck"></i>Kelola Distributor</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url();  ?>kelolaunitusaha"> <i class="menu-icon fa fa-home"></i>Kelola Unit Usaha</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url();  ?>optimasistok"> <i class="menu-icon fa fa-external-link-square"></i>Optimasi Stok</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url();  ?>laporan"> <i class="menu-icon fa fa-file"></i>Laporan</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url();  ?>jumlahstok"> <i class="menu-icon fa fa-align-left"></i>Jumlah Stok</a>
                    </li> -->


                    <li class="active">
                        <a onclick="return confirm('Anda akan keluar, yakin?');" href="<?= base_url();  ?>auth/logout"> <i class="menu-icon fa fa-sign-out"></i>Keluar</a>
                        <!-- <a class="fa fa-trash-o btn social youtube" onclick="return confirm('Data tidak akan dapat dikembalikan, yakin hapus?');" href="<?= base_url(); ?>kelolaunitusaha/hapus/<?= $un['id_unit']; ?>"></a> -->
                    </li>



                    <!-- <li class="active">
                        <a href="homestokbarang.php"> <i class="menu-icon fa fa-table"></i>Data Stock Barang</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="homestokbarang.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Kelola Stok Barang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?= base_url() ?>kelolabarangmasuk">Barang Masuk</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?= base_url() ?>kelolabarangkeluar">Barang Keluar</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="homebarangretur.php">Barang Retur</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="homelaporanbulanan.php"> <i class="menu-icon fa fa-table"></i>Laporan</a>
                    </li>
                    <li class="active">
                        <a href="homeeoq.php"> <i class="menu-icon fa fa-table"></i>Peramalan Stock</a>
                    </li>
                    <li class="active">
                        <a href="homekeloladistri.php"> <i class="menu-icon fa fa-table"></i>Kelola Distributor</a>
                    </li> -->



                </ul>

            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->