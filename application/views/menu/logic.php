<div class="col-lg-8">
    <div class="card bg-dark border-login mt-5">
        <img src="<?= base_url('assets/img/bg-auth.png'); ?>" class="card-img" alt="bg-login">
        <div class="card-img-overlay">
            <div class="row justify-content-end">
                <div class="col-lg-10">
                    <div class="card card-login">
                        <div class="card-header bg-white title-login border-light">
                            <?= $title; ?>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('menu/logic'); ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <?php if (form_error('number', '<div class="invalid-feedback pl-2">', '</div>')) : ?>
                                                <input type="text" class="form-control form-control-user is-invalid input-login" id="number" name="number" placeholder="Enter number" value="<?= set_value('number'); ?>">
                                                <?= form_error('number', '<div class="invalid-feedback pl-2">', '</div>'); ?>
                                            <?php else : ?>
                                                <input type="text" class="form-control form-control-user input-login" id="number" name="number" placeholder="Enter number" value="<?= set_value('number'); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-login btn-block">Check</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card card-login">
                        <div class="card-header bg-white title-login border-light">
                            Output
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('menu/logic'); ?>" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <?php error_reporting(0) ?>
                                        <?php if ($number_output) : ?>
                                            <?php foreach ($number_output as $num) : ?>
                                                <p class="text-center"><?= $num; ?></p>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <p class="text-center">The output will come out here</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4">
                                        <a href="<?= base_url('menu/logic') ?>" type="submit" class="btn btn-login btn-block text-white">Reset</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>