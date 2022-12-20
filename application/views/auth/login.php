<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                                <?= $this->session->flashdata('message'); ?>
                            </div>

                            <div class="card-body">
                                <form method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="text" placeholder="name@example.com" value="<?= set_value('email'); ?>" />
                                        <label for="inputEmail">Email address</label>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <button class="btn btn-primary" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('auth/register'); ?>">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>