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

            <div id="error">


                <div class="error-page container">
                    <div class="col-md-8 col-12 offset-md-2">
                        <img class="img-error" src="assets/images/samples/error-500.png" alt="Not Found">
                        <div class="text-center">
                            <h1 class="error-title">System Error</h1>
                            <p class="fs-5 text-gray-600">The website is currently unaivailable. Try again later or contact the
                                developer.</p>
                            <a href="index.html" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
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