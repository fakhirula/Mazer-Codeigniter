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
                            <h3>Pricing</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
                <section class="section">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-2">
                            <div class="pricing">
                                <div class="row align-items-center">
                                    <div class="col-md-4 px-0">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h4 class="card-title">Basic</h4>
                                                <p class="text-center">A standart features you can get</p>
                                            </div>
                                            <h1 class="price">$100</h1>
                                            <ul>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                            </ul>
                                            <div class="card-footer">
                                                <button class="btn btn-primary btn-block">Order Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-0">
                                        <div class="card card-highlighted">
                                            <div class="card-header text-center">
                                                <h4 class="card-title">Enterpreneur</h4>
                                                <p></p>
                                            </div>
                                            <h1 class="price text-white">$150</h1>
                                            <ul>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum kolor sit amet</li>
                                            </ul>
                                            <div class="card-footer">
                                                <button class="btn btn-outline-white btn-block">Order Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-0">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h4 class="card-title">Professional</h4>
                                                <p class="text-center">A higher features you will need</p>
                                            </div>
                                            <h1 class="price">$100</h1>
                                            <ul>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit </li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum dolor sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem ipsum sit amet</li>
                                                <li><i class="bi bi-check-circle"></i>Lorem dolor sit amet</li>
                                            </ul>
                                            <div class="card-footer">
                                                <button class="btn btn-primary btn-block">Order Now</button>
                                            </div>
                                        </div>
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