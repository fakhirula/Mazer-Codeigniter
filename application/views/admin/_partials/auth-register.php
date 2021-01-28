<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view("admin/_partials/head.php") ?>

<body>
    <div id="app">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div id="auth">

                <div class="row h-100">
                    <div class="col-lg-5 col-12">
                        <div id="auth-left">
                            <div class="auth-logo">
                                <a href="index.html"><img src="<?php echo base_url('') ?>assets/images/logo/logo.png" alt="Logo"></a>
                            </div>
                            <h1 class="auth-title">Sign Up</h1>
                            <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                            <form action="index.html">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" class="form-control form-control-xl" placeholder="Email">
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" class="form-control form-control-xl" placeholder="Username">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="password" class="form-control form-control-xl" placeholder="Password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="password" class="form-control form-control-xl" placeholder="Confirm Password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                            </form>
                            <div class="text-center mt-5 text-lg fs-4">
                                <p class='text-gray-600'>Already have an account? <a href="auth-login.html"
                                        class="font-bold">Log
                                        in</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <div id="auth-right">

                        </div>
                    </div>
                </div>

            </div>

            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/btm_script.php") ?>
</body>

</html>