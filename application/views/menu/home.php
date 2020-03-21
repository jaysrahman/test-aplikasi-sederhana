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
                                    Hello, <?= ucfirst($this->session->userdata('username')); ?>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <p class="small font-weight-bold">Choose what you want</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="<?= base_url('menu/logic'); ?>" class="btn btn-login btn-block text-white">Logic</a>
                                        </div>
                                        <div class="col">
                                            <a href="<?= base_url('menu/database'); ?>" class="btn btn-login btn-block text-white">Database</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>