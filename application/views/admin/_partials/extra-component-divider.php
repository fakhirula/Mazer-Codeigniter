<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url('') ?>assets/images/favicon.svg" type="image/x-icon">

</head>
<body>
    <div id="app">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Divider</h3>
                            <p class="text-subtitle text-muted">A Component</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Divider</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default</h4>
                                </div>
                                <div class="card-body">
                                    <p>You can use default divider with <code>&lt;hr&gt;</code><code><hr></code></p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum
                                        numquam
                                        reprehenderit facilis. Dolor blanditiis commodi voluptate esse voluptatum aut
                                        natus,
                                        distinctio at, officiis ipsam molestiae doloribus ratione corrupti dolorum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Divider with Text</h4>
                                </div>
                                <div class="card-body">
                                    <p>Use <code>.divider-text</code> and wrapped by <code>.divider</code> to create a
                                        divider text
                                    </p>
                                    <div class="divider">
                                        <div class="divider-text">Hello there!</div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum
                                        numquam
                                        reprehenderit facilis. Dolor blanditiis commodi voluptate esse voluptatum aut
                                        natus,
                                        distinctio at, officiis ipsam molestiae doloribus ratione corrupti dolorum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Divider Position</h4>
                                </div>
                                <div class="card-body">
                                    <p>Use <code>.divider-{left|left-center|right-center|right}</code> and with
                                        <code>.divider</code> to change the text position
                                    </p>
                                    <div class="divider divider-left">
                                        <div class="divider-text">Left</div>
                                    </div>
                                    <div class="divider divider-left-center">
                                        <div class="divider-text">Left Center</div>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text">Center</div>
                                    </div>
                                    <div class="divider divider-right-center">
                                        <div class="divider-text">Right Center</div>
                                    </div>
                                    <div class="divider divider-right">
                                        <div class="divider-text">Right</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php $this->load->view("admin/_partials/footer.php") ?>
            <script src="<?php echo base_url('') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="<?php echo base_url('') ?>assets/js/bootstrap.bundle.min.js"></script>

            <script src="<?php echo base_url('') ?>assets/js/main.js"></script>

        </div>
    </div>
    <?php $this->load->view("admin/_partials/btm_script.php") ?>
</body>

</html>