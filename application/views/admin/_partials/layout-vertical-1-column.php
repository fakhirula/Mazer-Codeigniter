<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/app.css">

</head>
<body>       
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="<?php echo base_url('')?>admin"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="<?php echo base_url('')?>admin">
                <img src="<?php echo base_url('') ?>assets/images/logo/logo.png">
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4 class="card-title">Single Layout</h4>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nemo quasi labore expedita?
                    Veritatis
                    at maxime id voluptates excepturi molestiae possimus blanditiis dicta consequuntur maiores suscipit,
                    eveniet neque obcaecati doloribus.</p>
            </div>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/btm_script.php") ?>
</body>

</html>