<title><?php echo $judul; ?></title>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <span><i class="menu-icon fa fa-sign-in"></i> LOGIN</span>
                </div>

                <!-- <?php if ($this->session->flashdata('gagal')) : ?>
                    <div class="row-mt-3">
                        <div class="col-sm-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-danger">Gagal!</span> Data<strong> <?= $this->session->flashdata('gagal'); ?> </strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?> -->

                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row-mt-3">
                        <div class="col-sm-12">
                            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> -->
                            <?= $this->session->flashdata('flash'); ?>
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                            <!-- </div> -->
                        </div>
                    </div>
                <?php endif; ?>

                <div class="login-form">
                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <div class="form-group">
                            <label><i class="menu-icon fa fa-user"></i> Username</label>
                            <input type="username" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label><i class="menu-icon fa fa-lock"></i> Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
                    </form>
                    <div class="container">
                        <i><small>&copy;Sistem Informasi Universitas Tanjungpura</small></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </html>