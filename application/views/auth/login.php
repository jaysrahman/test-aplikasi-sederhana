<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card bg-dark border-login mt-5">
                <img src="<?= base_url('assets/img/bg-login.png'); ?>" class="card-img" alt="bg-login">
                <div class="card-img-overlay">
                    <div class="row mt-3">
                        <div class="col-lg-6 ml-4"></div>
                        <div class="col-lg-5 mt-5">
                            <div class="card mt-5 card-login mb-4">
                                <div class="card-header bg-white title-login border-light">
                                    <?= strtoupper($title); ?>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-login" id="email" name="email" placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control input-login" id="password" name="password" placeholder="Masukkan Password">
                                        </div>
                                        <button type="submit" class="btn btn-login btn-block">Masuk</button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="small text-white font-weight-bold">Belum punya akun ?<br><a class="text-dark" href="<?= base_url('auth/registration'); ?>">Daftar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>