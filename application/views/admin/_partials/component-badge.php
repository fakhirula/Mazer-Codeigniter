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
                            <h3>Badge</h3>
                            <p class="text-subtitle text-muted">Examples for badges, our small count and labeling
                                component</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Badge</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Variation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="badges">
                                        <span class="badge bg-primary">Primary</span>
                                        <span class="badge bg-secondary">Secondary</span>
                                        <span class="badge bg-success">Success</span>
                                        <span class="badge bg-danger">Danger</span>
                                        <span class="badge bg-warning">Warning</span>
                                        <span class="badge bg-info">Info</span>
                                        <span class="badge bg-dark">Dark</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Light</h4>
                                </div>
                                <div class="card-body">
                                    <div class="badges">
                                        <span class="badge bg-light-primary">Primary</span>
                                        <span class="badge bg-light-secondary">Secondary</span>
                                        <span class="badge bg-light-success">Success</span>
                                        <span class="badge bg-light-danger">Danger</span>
                                        <span class="badge bg-light-warning">Warning</span>
                                        <span class="badge bg-light-info">Info</span>
                                        <span class="badge bg-light-dark">Dark</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Heading</h4>
                                </div>
                                <div class="card-body">
                                    <h1>Heading 1 <span class="badge bg-secondary">New</span></h1>
                                    <h2>Heading 2 <span class="badge bg-secondary">New</span></h2>
                                    <h3>Heading 3 <span class="badge bg-secondary">New</span></h3>
                                    <h4>Heading 4 <span class="badge bg-secondary">New</span></h4>
                                    <h5>Heading 5 <span class="badge bg-secondary">New</span></h5>
                                    <h6>Heading 6 <span class="badge bg-secondary">New</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Button</h4>
                                </div>
                                <div class="card-body">
                                    <div class="buttons">
                                        <div class="section-title mt-0">Simple</div>
                                        <button type="button" class="btn btn-primary">
                                            Notifications <span class="badge bg-transparent">4</span>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            Notifications <span class="badge bg-transparent">4</span>
                                        </button>
                                        <button type="button" class="btn btn-warning">
                                            Notifications <span class="badge bg-transparent">4</span>
                                        </button>
                                        <button type="button" class="btn btn-success">
                                            Notifications <span class="badge bg-transparent">4</span>
                                        </button>
                                        <button type="button" class="btn btn-dark">
                                            Notifications <span class="badge bg-transparent">4</span>
                                        </button>
                                        <div class="section-title">Icons</div>
                                        <button type="button" class="btn btn-primary btn-icon icon-left">
                                            <i class="fas fa-plane"></i> Notifications <span
                                                class="badge bg-transparent">4</span>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon icon-left">
                                            <i class="fas fa-plane"></i> Notifications <span
                                                class="badge bg-transparent">4</span>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-icon icon-left">
                                            <i class="fas fa-plane"></i> Notifications <span
                                                class="badge bg-transparent">4</span>
                                        </button>
                                        <button type="button" class="btn btn-success btn-icon icon-left">
                                            <i class="fas fa-plane"></i> Notifications <span
                                                class="badge bg-transparent">4</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Link</h4>
                                </div>
                                <div class="card-body">
                                    <div class="badges">
                                        <a href="#" class="badge bg-primary">Primary</a>
                                        <a href="#" class="badge bg-secondary">Secondary</a>
                                        <a href="#" class="badge bg-success">Success</a>
                                        <a href="#" class="badge bg-danger">Danger</a>
                                        <a href="#" class="badge bg-warning">Warning</a>
                                        <a href="#" class="badge bg-info">Info</a>
                                        <a href="#" class="badge bg-light">Light</a>
                                        <a href="#" class="badge bg-dark">Dark</a>
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