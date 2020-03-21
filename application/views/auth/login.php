<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card bg-dark border-login mt-5">
                <img src="<?= base_url('assets/img/bg-auth.png'); ?>" class="card-img" alt="bg-login">
                <div class="card-img-overlay">
                    <div class="row mt-5">
                        <div class="col-lg-2 copyright">
                            <div class="text-left">
                                <span class="small font-weight-bold">&copy; Jays <?= date('Y'); ?></span>
                            </div>
                        </div>
                        <div class="col-lg-2 ml-5"></div>
                        <div class="col-lg-7">
                            <div class="card mt-5 card-login mb-4">
                                <div class="card-header bg-white title-login border-light">
                                    <?= strtoupper($title); ?>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-login" id="username" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control input-login" id="password" name="password" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-login btn-block">Sign In</button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="small text-white font-weight-bold">Don't have an account yet ?<br><a class="text-dark" href="<?= base_url('auth/registration'); ?>">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>