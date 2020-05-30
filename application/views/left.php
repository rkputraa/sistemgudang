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
    <title>Sistem Informasi Gudang</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url("media/vendors/bootstrap/dist/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/font-awesome/css/font-awesome.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/themify-icons/css/themify-icons.css");?> ">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/flag-icon-css/css/flag-icon.min.css");?> ">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/selectFX/css/cs-skin-elastic.css");?> ">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/jqvmap/dist/jqvmap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css");?>">


    <link rel="stylesheet" href="<?php echo base_url("media/assets/css/style.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("media/vendors/chosen/chosen.min.css");?>">

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
                
                <h2 class="navbar-brand"> Menu </h2>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="homeprofil.php"> <i class="menu-icon fa fa-user"></i>Profil</a>
                    </li>
                    <li class="active">
                        <a href="homekelolauser.php"> <i class="menu-icon fa fa-users"></i>Kelola User</a>
                    </li>
                    <li class="active">
                        <a href="homestokbarang.php"> <i class="menu-icon fa fa-table"></i>Data Stock Barang</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="homestokbarang.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Kelola Stok Barang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="homebarangmasuk.php">Barang Masuk</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="homebarangkeluar.php">Barang Keluar</a></li>
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
                    </li>
                </ul>

<!--                    <h3 class="menu-title">Icons</h3>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="../font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="../font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="../charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="../charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="../charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="../maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="../maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="../page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="../page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="../pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->