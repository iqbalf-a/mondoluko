<div class="section section-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Daftar Akun Dusun Mondoluko</h2>
                <p class="description">The kit comes with three pre-built pages to help you get started faster. You
                    can change the text and images and you're good to go. More importantly, looking at them will
                    give you a picture of what you can built with this powerful kit.</p>
            </div>
        </div>
    </div>
</div>
<div class="section section-image section-login" style="background-image: url('<?= base_url('vendor') ?>/assets/img/login-image.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="card card-register">
                    <h3 class="title mx-auto">Selamat Datang</h3>
                    <form class="register-form" method="POST" action=" <?= base_url('auth/registration') ?> ">
                        <label>Nama</label>
                        <div class="input-group form-group-no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nc-icon nc-satisfied"></i>
                                </span>
                            </div>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Nama">
                        </div>
                        <label>Email</label>
                        <div class="input-group form-group-no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nc-icon nc-email-85"></i>
                                </span>
                            </div>
                            <input id="email" name="email" type="text" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
                        </div>
                        <label>Password</label>
                        <div class="input-group form-group-no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nc-icon nc-key-25"></i>
                                </span>
                            </div>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" value="<?= set_value('password'); ?>">
                        </div>
                        <button type="submit" class="btn btn-danger btn-block btn-round">Daftar</button>
                    </form>
                    <div class="forgot">
                        <a href=" <?= base_url('auth') ?> " class="btn btn-link ">Sudah punya akun? masuk disini</a>
                    </div>
                </div>
                <div class="text-center">
                    <a href="<?= base_url() ?>" class="btn btn-info btn-round btn-block">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>