<div class="col-lg-2">
    <div class="card card-login">
        <div class="card-header bg-white title-login border-light text-center">
            <?= ucfirst($this->session->userdata('username')); ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <a href="<?= base_url('auth/logout'); ?>" class="btn btn-login btn-block text-white">Logout</a>
                </div>
            </div>
            <div class="row">
                <div class="col mt-2">
                    <div class="text-center">
                        <span class="small font-weight-bold">&copy; Jays <?= date('Y'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
</body>

</html>