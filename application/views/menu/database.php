<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="card card-login">
                <div class="card-header bg-white title-login border-light text-center">
                    Menu
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <a href="<?= base_url('menu/logic'); ?>" class="btn btn-login btn-block text-white">Logic</a>
                        </div>
                        <div class="col">
                            <a href="<?= base_url('menu/database'); ?>" class="btn btn-login btn-block text-white">Database</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <form action="<?= base_url('menu/database'); ?>" method="POST">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <?php if (form_error('name', '<div class="invalid-feedback pl-2">', '</div>')) : ?>
                                                        <input type="text" class="form-control form-control-user is-invalid input-login" id="name" name="name" placeholder="Name" value="<?= set_value('name'); ?>">
                                                        <?= form_error('name', '<div class="invalid-feedback pl-2">', '</div>'); ?>
                                                    <?php else : ?>
                                                        <input type="text" class="form-control form-control-user input-login" id="name" name="name" placeholder="Name" value="<?= set_value('name'); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <?php if (form_error('telp', '<div class="invalid-feedback pl-2">', '</div>')) : ?>
                                                        <input type="text" class="form-control form-control-user is-invalid input-login" id="telp" name="telp" placeholder="Telp" value="<?= set_value('telp'); ?>">
                                                        <?= form_error('telp', '<div class="invalid-feedback pl-2">', '</div>'); ?>
                                                    <?php else : ?>
                                                        <input type="text" class="form-control form-control-user input-login" id="telp" name="telp" placeholder="Telp" value="<?= set_value('telp'); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <?php if (form_error('address', '<div class="invalid-feedback pl-2">', '</div>')) : ?>
                                                        <input type="text" class="form-control form-control-user is-invalid input-login" id="address" name="address" placeholder="Address" value="<?= set_value('address'); ?>">
                                                        <?= form_error('address', '<div class="invalid-feedback pl-2">', '</div>'); ?>
                                                    <?php else : ?>
                                                        <input type="text" class="form-control form-control-user input-login" id="address" name="address" placeholder="Address" value="<?= set_value('address'); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <?php if (form_error('school', '<div class="invalid-feedback pl-2">', '</div>')) : ?>
                                                        <input type="text" class="form-control form-control-user is-invalid input-login" id="school" name="school" placeholder="School" value="<?= set_value('school'); ?>">
                                                        <?= form_error('school', '<div class="invalid-feedback pl-2">', '</div>'); ?>
                                                    <?php else : ?>
                                                        <input type="text" class="form-control form-control-user input-login" id="school" name="school" placeholder="School" value="<?= set_value('school'); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-5">
                                                <button type="submit" class="btn btn-login btn-block">Submit</button>
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
                                <div class="card-body">
                                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Telp</th>
                                                <th>Address</th>
                                                <th>School</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($users as $user) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $user['name']; ?></td>
                                                    <td><?= $user['telp']; ?></td>
                                                    <td><?= $user['address']; ?></td>
                                                    <td><?= $user['school']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>