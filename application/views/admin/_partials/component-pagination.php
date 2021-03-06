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
                            <h3>Pagination</h3>
                            <p class="text-subtitle text-muted">Examples for showing pagination to indicate a series of
                                related
                                content exists across multiple pages.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Navs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Basic Pagination</h4>
                                </div>
                                <div class="card-body">
                                    <p>Pagination with active item</p>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pagination with Icon</h4>
                                </div>
                                <div class="card-body">
                                    <p>Change prev and next button into icon</p>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary">
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                </a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pagination Color </h4>
                                </div>
                                <div class="card-body">
                                    <p>To add pagination with different color option, use class
                                        <code>.pagination-{colorName}</code>
                                        with <code>.pagination</code> class.</p>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-danger">
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                </a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                </a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-dark">
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                </a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                </a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-success">
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                </a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pagination Size</h4>
                                </div>
                                <div class="card-body">
                                    <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or
                                        <code>.pagination-sm</code> for additional sizes.
                                    </p>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary pagination-sm">
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                </a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                </a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary">
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                </a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                </a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary pagination-lg">
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                </a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">
                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Alignment</h4>
                        </div>
                        <div class="card-body">
                            <p>Change the alignment of pagination components with flexbox utilities.</p>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary  justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary  justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
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