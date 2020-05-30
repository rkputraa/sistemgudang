<<?php var_dump($user); ?> <div class="col-lg-4 col-md-6">
    <div class="card-body card-block">
        <?php foreach ($user as $dta) : ?>
            <form action="" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Id</label></div>
                    <div class="col-12 col-md-9"><?= $dta['id'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><?= $dta['email'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                    <div class="col-12 col-md-9"><?= $dta['nama'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><?= $dta['password'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Jenis Kelamin</label></div>
                    <div class="col-12 col-md-9"><?= $dta['jenis_kelamin'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Tempat Lahir</label></div>
                    <div class="col-12 col-md-9"><?= $dta['tempat_lahir'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Tanggal Lahir</label></div>
                    <div class="col-12 col-md-9"><?= $dta['tanggal_lahir'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Alamat</label></div>
                    <div class="col-12 col-md-9"><?= $dta['alamat'];  ?></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Jabatan</label></div>
                    <div class="col-12 col-md-9"><?= $dta['jabatan'];  ?></div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
    </div>

    <div class="card">
        <div class="card-header">
            <strong>Edit</strong> Profil
        </div>
        <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Masukkan Nama" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                    <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </div>