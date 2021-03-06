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
                            <h3>Avatar</h3>
                            <p class="text-subtitle text-muted">A Component</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Avatar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Avatar</h4>
                        </div>
                        <div class="card-body">
                            <p>Wrap your content with <code>.avatar</code> class and wrap your text in
                                <code>.avatar</code>-content
                                to create a avatar.You have to use inline
                                attributes to set height width of image in default avatar.</p>
                            <div class="avatar bg-primary me-3">
                                <span class="avatar-content"><i class="bi bi-envelope"></i></span>
                            </div>
                            <div class="avatar bg-warning me-3">
                                <span class="avatar-content">AS</span>
                            </div>
                            <div class="avatar bg-warning me-3">
                                <img src="<?php echo base_url('') ?>assets/images/faces/1.jpg" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Avatar Sizes</h4>
                        </div>
                        <div class="card-body">
                            <p>use class <code>.avatar-{sm|lg|xl}</code> with <code>.avatar</code> to modify size of
                                your avatar.
                            </p>
                            <div class="avatar avatar-sm bg-primary me-3">
                                <span class="avatar-content"><i class="bi bi-envelope"></i></span>
                            </div>
                            <div class="avatar bg-warning me-3">
                                <span class="avatar-content">AS</span>
                            </div>
                            <div class="avatar me-3">
                                <img src="<?php echo base_url('') ?>assets/images/faces/1.jpg" alt="" srcset="">
                            </div>
                            <div class="avatar avatar-lg me-3">
                                <img src="<?php echo base_url('') ?>assets/images/faces/2.jpg" alt="" srcset="">
                            </div>
                            <div class="avatar avatar-xl me-3">
                                <img src="<?php echo base_url('') ?>assets/images/faces/3.jpg" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Avatar Status</h4>
                        </div>
                        <div class="card-body">
                            <p>use class <code>.avatar-status</code> and <code>.bg-{color}</code> after
                                <code>.avatar-content</code>
                            </p>
            
                            <div class="avatar bg-warning me-3">
                                <span class="avatar-content">AS</span>
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="avatar bg-warning me-3">
                                <img src="<?php echo base_url('') ?>assets/images/faces/1.jpg" alt="" srcset="">
                                <span class="avatar-status bg-danger"></span>
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