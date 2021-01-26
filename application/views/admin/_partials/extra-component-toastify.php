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

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Toastify</h3>
                            <p class="text-subtitle text-muted">Better notification messages</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Toastify</li>
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
                                    <h4 class="card-title">Types</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <button id="basic" class="btn btn-outline-primary btn-block btn-lg">Basic
                                                Toast</button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button id="background"
                                                class="btn btn-outline-primary btn-block btn-lg">Custom
                                                Background</button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button id="close" class="btn btn-outline-primary btn-block btn-lg">Close
                                                Button</button>
                                        </div>
                                    </div>
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
                                    <h4 class="card-title">Position</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <button id="top-left" class="btn btn-outline-primary btn-block btn-lg">Top
                                                Left</button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button id="top-center" class="btn btn-outline-primary btn-block btn-lg">Top
                                                Center</button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button id="top-right" class="btn btn-outline-primary btn-block btn-lg">Top
                                                Right</button>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-md-4">
                                            <button id="bottom-left"
                                                class="btn btn-outline-primary btn-block btn-lg">Bottom
                                                Left</button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button id="bottom-center"
                                                class="btn btn-outline-primary btn-block btn-lg">Bottom
                                                Center</button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button id="bottom-right"
                                                class="btn btn-outline-primary btn-block btn-lg">Bottom
                                                Right</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/btm_script.php") ?>
</body>

</html>