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
                            <h3>Progress</h3>
                            <p class="text-subtitle text-muted">Examples for how to use Bootstrap’s included navigation
                                components.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                z<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Progress</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
                <!-- Default Progress Start  -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Default</h4>
                        </div>
                        <div class="card-body">
                            <p>Use class <code>.progress-bar-{color-name}</code> to add different colors to progressbar.
                            </p>
                            <div class="progress progress-primary  mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-secondary  mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-warning  mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-danger  mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-dark  mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-info  mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Default Progress End  -->
            
                <!-- Progress Label Start  -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Progress Label</h4>
                        </div>
                        <div class="card-body">
                            <p>Use class <code>.progress-bar-{color-name}</code> to add different colors to progressbar.
                            </p>
                            <div class="progress progress-primary  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 35%"
                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-secondary  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-warning  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-danger  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 40%"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-dark  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-info  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 88%"
                                    aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Progress Label End  -->
            
                <!-- Progress Label Start  -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Progress Striped</h4>
                        </div>
                        <div class="card-body">
                            <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a
                                stripe via CSS
                                gradient over the progress bar’s background
                                color.</p>
                            <div class="progress progress-primary  mb-4">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 35%"
                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-secondary  mb-4">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-warning  mb-4">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-danger  mb-4">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-dark  mb-4">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-info  mb-4">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 88%"
                                    aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Progress Label End  -->
            
                <!-- Progress Sizes Start  -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Progress Sizes</h4>
                        </div>
                        <div class="card-body">
                            <p>For Default progress, No size class needed. you can use class <code>.progress-sm</code>
                                or
                                <code>.progress-lg</code> with <code>.progress</code> to change size of your
                                progress bar.
                            </p>
                            <div class="progress progress-success progress-sm  mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-primary mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-warning progress-lg  mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Progress Label End  -->
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