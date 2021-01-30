<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

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
                            <h3>Modal</h3>
                            <p class="text-subtitle text-muted">Use Bootstrap’s JavaScript modal plugin to add dialogs
                                to your site
                                for lightboxes, user notifications, or completely
                                custom content</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Modal</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section id="basic-modals">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Modal</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Toggle a modal via JavaScript by clicking the button above.
                                        You can use modal to add dialogs to your site for lightboxes, user
                                        notifications, or completely custom content.
                                    </p>
                                    <!-- Button trigger for basic modal -->
                                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                        data-bs-target="#default">
                                        Launch Modal
                                    </button>

                                    <!--Basic Modal -->
                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">Basic Modal</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                        dragée pastry.
                                                        Carrot cake
                                                        chocolate tootsie roll chocolate bar candy canes biscuit.

                                                        Gummies bonbon apple pie fruitcake icing biscuit apple pie
                                                        jelly-o sweet
                                                        roll. Toffee sugar
                                                        plum sugar plum jelly-o jujubes bonbon dessert carrot cake.
                                                        Cookie dessert
                                                        tart muffin topping
                                                        donut icing fruitcake. Sweet roll cotton candy dragée danish
                                                        Candy canes
                                                        chocolate bar cookie.
                                                        Gingerbread apple pie oat cake. Carrot cake fruitcake bear claw.
                                                        Pastry
                                                        gummi bears
                                                        marshmallow jelly-o.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary ml-1"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Accept</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">BorderLess Modal</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Toggle a Boderless via JavaScript by clicking the button above. Use
                                            <code>.modal-borderless</code>
                                            with <code>.modal</code>for BorderLess modal.
                                        </p>
                                        <!-- Button trigger for BorderLess Modal -->
                                        <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-target="#border-less">
                                            Launch Modal
                                        </button>

                                        <!--BorderLess Modal Modal -->
                                        <div class="modal fade text-left modal-borderless" id="border-less"
                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Border-Less</h5>
                                                        <button type="button" class="close rounded-pill"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                            dragée
                                                            pastry. Carrot cake
                                                            chocolate tootsie roll chocolate bar candy canes biscuit.
                                                            Gummies bonbon apple pie fruitcake icing biscuit apple pie
                                                            jelly-o sweet
                                                            roll. Toffee sugar
                                                            plum sugar plum jelly-o jujubes bonbon dessert carrot cake.
                                                            Cookie
                                                            dessert tart muffin topping
                                                            donut icing fruitcake. Sweet roll cotton candy dragée danish
                                                            Candy canes
                                                            chocolate bar cookie.
                                                            Gingerbread apple pie oat cake. Carrot cake fruitcake bear
                                                            claw. Pastry
                                                            gummi bears
                                                            marshmallow jelly-o.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Vertically Centered
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to
                                            vertically
                                            center the modal.
                                        </p>
                                        <!-- button trigger for  Vertically Centered modal -->
                                        <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Launch Modal
                                        </button>
                                        <!-- Vertically Centered modal Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Vertically
                                                            Centered
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Croissant jelly-o halvah chocolate sesame snaps. Brownie
                                                            caramels candy
                                                            canes chocolate cake
                                                            marshmallow icing lollipop I love. Gummies macaroon donut
                                                            caramels
                                                            biscuit topping danish.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disabled Backdrop</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can disable the backdrop by using <code>data-bs-backdrop="false"</code>
                                        </p>
                                        <!-- Button trigger for Disabled Backdrop -->
                                        <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-backdrop="false" data-bs-target="#backdrop">
                                            Launch Modal
                                        </button>

                                        <!--Disabled Backdrop Modal -->
                                        <div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel4" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel4">Disabled Backdrop
                                                        </h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Candy oat cake topping topping chocolate cake. Icing pudding
                                                            jelly beans
                                                            I love chocolate carrot
                                                            cake wafer candy canes. Biscuit croissant fruitcake bonbon
                                                            soufflé.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Modals end -->

                <!-- Modal Themes start -->
                <section id="modal-themes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal Themes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mb-1">
                                            Use class <code>.bg-*</code> with your <code>.modal-header</code> to change
                                            theme of
                                            modal
                                        </p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="modal-primary me-1 mb-1 d-inline-block">
                                                    <!-- Button trigger for primary themes modal -->
                                                    <button type="button" class="btn btn-outline-primary"
                                                        data-bs-toggle="modal" data-bs-target="#primary">
                                                        Primary
                                                    </button>

                                                    <!--primary theme Modal -->
                                                    <div class="modal fade text-left" id="primary" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel160"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary">
                                                                    <h5 class="modal-title white" id="myModalLabel160">
                                                                        Primary Modal
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake lollipop. I
                                                                    love cookie
                                                                    lollipop cake I love sweet
                                                                    gummi
                                                                    bears cupcake dessert.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary ml-1"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-success me-1 mb-1 d-inline-block">
                                                    <!-- Button trigger for Success theme modal -->
                                                    <button type="button" class="btn btn-outline-success"
                                                        data-bs-toggle="modal" data-bs-target="#success">
                                                        Success
                                                    </button>

                                                    <!--Success theme Modal -->
                                                    <div class="modal fade text-left" id="success" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel110"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-success">
                                                                    <h5 class="modal-title white" id="myModalLabel110">
                                                                        Success Modal
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake lollipop. I
                                                                    love cookie
                                                                    lollipop cake I love sweet
                                                                    gummi
                                                                    bears cupcake dessert.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>

                                                                    <button type="button" class="btn btn-success ml-1"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-danger me-1 mb-1 d-inline-block">
                                                    <!-- Button trigger for danger theme modal -->
                                                    <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal" data-bs-target="#danger">
                                                        Danger
                                                    </button>

                                                    <!--Danger theme Modal -->
                                                    <div class="modal fade text-left" id="danger" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel120"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <h5 class="modal-title white" id="myModalLabel120">
                                                                        Danger Modal
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake lollipop. I
                                                                    love cookie
                                                                    lollipop cake I love sweet
                                                                    gummi bears cupcake dessert.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger ml-1"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-info me-1 mb-1 d-inline-block">
                                                    <!-- Button trigger for info theme modal -->
                                                    <button type="button" class="btn btn-outline-info"
                                                        data-bs-toggle="modal" data-bs-target="#info">
                                                        Info
                                                    </button>

                                                    <!--info theme Modal -->
                                                    <div class="modal fade text-left" id="info" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel130"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-info">
                                                                    <h5 class="modal-title white" id="myModalLabel130">
                                                                        Info Modal
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake lollipop. I
                                                                    love cookie
                                                                    lollipop cake I love sweet
                                                                    gummi bears cupcake dessert.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-info ml-1"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-warning me-1 mb-1 d-inline-block">
                                                    <!-- Button trigger for warning theme modal -->
                                                    <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-bs-target="#warning">
                                                        Warning
                                                    </button>

                                                    <!--warning theme Modal -->
                                                    <div class="modal fade text-left" id="warning" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel140"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-warning">
                                                                    <h5 class="modal-title white" id="myModalLabel140">
                                                                        Warning Modal
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake lollipop. I
                                                                    love cookie
                                                                    lollipop cake I love sweet
                                                                    gummi bears cupcake dessert.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>

                                                                    <button type="button" class="btn btn-warning ml-1"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-dark me-1 mb-1 d-inline-block">
                                                    <!-- Button trigger for dark modal -->
                                                    <button type="button" class="btn btn-outline-dark"
                                                        data-bs-toggle="modal" data-bs-target="#dark">
                                                        Dark
                                                    </button>
                                                    <!--Dark theme Modal -->
                                                    <div class="modal fade text-left" id="dark" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel150"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-dark white">
                                                                    <span class="modal-title" id="myModalLabel150">Dark
                                                                        Modal</span>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Tart lemon drops macaroon oat cake chocolate toffee
                                                                    chocolate
                                                                    bar icing. Pudding jelly beans
                                                                    carrot cake pastry gummies cheesecake lollipop. I
                                                                    love cookie
                                                                    lollipop cake I love sweet
                                                                    gummi bears cupcake dessert.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-dark ml-1"
                                                                        data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Modal Themes end -->

                <!-- Modal Sizes start -->
                <section id="modal-sizes">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Modal Sizes</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    Add class <code>.modal-{sm|lg|xl|full}</code> with <code>.modal-dialog</code> to
                                    create a modal
                                    with
                                    different size.
                                </p>
                                <div class="row">
                                    <div class="col-12">
                                        <!--Modal sm size -->
                                        <div class="me-1 mb-1 d-inline-block">
                                            <!-- Button trigger for small size modal modal -->
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                                data-bs-target="#small">
                                                Small Modal
                                            </button>

                                            <!--small size modal -->
                                            <div class="modal fade text-left" id="small" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel19" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel19">Small Modal</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Biscuit chocolate cake gummies. Lollipop I love macaroon
                                                            bear claw
                                                            caramels. I love
                                                            marshmallow tiramisu I love fruitcake I love gummi bears.
                                                            Carrot cake topping liquorice. Pudding caramels liquorice
                                                            sweet I love.
                                                            Donut powder cupcake
                                                            ice cream tootsie roll jelly.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary btn-sm"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-sm-block d-none">Close</span>
                                                            </button>
                                                            <button type="button" class="btn btn-primary ml-1 btn-sm"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-sm-block d-none">Accept</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Modal default md size -->
                                        <div class="me-1 mb-1 d-inline-block">
                                            <!-- Button trigger for default modal -->
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                                data-bs-target="#defaultSize">
                                                Default Modal
                                            </button>

                                            <!--Default size Modal -->
                                            <div class="modal fade text-left" id="defaultSize" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel18">Default Modal
                                                            </h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            I love candy candy cake powder I love icing ice cream
                                                            pastry. Biscuit
                                                            lemon drops sesame
                                                            snaps. Topping biscuit croissant gummi bears jelly beans
                                                            cake cake bear
                                                            claw muffin. Lemon
                                                            drops oat cake pastry bear claw liquorice lemon drops.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="button" class="btn btn-primary ml-1"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Accept</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Modal lg size -->
                                        <div class="me-1 mb-1 d-inline-block">
                                            <!-- Button trigger for large size modal -->
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                                data-bs-target="#large">
                                                Large Modal
                                            </button>
                                            <!--large size Modal -->
                                            <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel17" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel17">Large Modal</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            I love tart cookie cupcake. I love chupa chups biscuit. I
                                                            love
                                                            marshmallow apple pie wafer
                                                            liquorice. Marshmallow cotton candy chocolate. Apple pie
                                                            muffin tart.
                                                            Marshmallow halvah pie
                                                            marzipan lemon drops jujubes. Macaroon sugar plum cake icing
                                                            toffee.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="button" class="btn btn-primary ml-1"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Accept</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Modal Xl size -->
                                        <div class="me-1 mb-1 d-inline-block">
                                            <!-- Button trigger for Extra Large  modal -->
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                                data-bs-target="#xlarge">
                                                Extra Large Modal
                                            </button>

                                            <!--Extra Large Modal -->
                                            <div class="modal fade text-left w-100" id="xlarge" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel16">Extra Large
                                                                Modal</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Cake cupcake sugar plum. Sesame snaps pudding cupcake candy
                                                            canes icing
                                                            cheesecake. Sweet roll
                                                            pudding lollipop apple pie gummies dragée. Chocolate bar
                                                            cookie caramels
                                                            I love lollipop ice
                                                            cream tiramisu lollipop sweet.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="button" class="btn btn-primary ml-1"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Accept</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Modal full size -->
                                        <div class="me-1 mb-1 d-inline-block">
                                            <!-- Button trigger for full size modal -->
                                            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                                data-bs-target="#full-scrn">
                                                Full Screen Modal
                                            </button>

                                            <!-- full size modal-->
                                            <div class="modal fade text-left w-100" id="full-scrn" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel20">Full Screen
                                                                Modal</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Cake cupcake sugar plum. Sesame snaps pudding cupcake candy
                                                            canes icing
                                                            cheesecake. Sweet roll
                                                            pudding lollipop apple pie gummies dragée. Chocolate bar
                                                            cookie caramels
                                                            I love lollipop ice
                                                            cream tiramisu lollipop sweet.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="button" class="btn btn-primary ml-1"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Accept</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Modal Sizes end -->

                <!-- Form and scrolling Components start -->
                <section id="form-and-scrolling-components">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <h4 class="card-title">Modal with Login Form</h4>
                                            <p> Created Simple Login Form.</p>
                                            <!-- Button trigger for login form modal -->
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                                data-bs-target="#inlineForm">
                                                Launch Modal
                                            </button>

                                            <!--login form Modal -->
                                            <div class="modal fade text-left" id="inlineForm" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Close</span>
                                                                </button>
                                                                <button type="button" class="btn btn-primary ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">login</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Scrolling long Content</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>If your content is longer you the page will autmatically adopt a scrollbar
                                        </p>
                                        <!-- Button trigger for scrollbar modal -->
                                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalLong">
                                            Launch demo modal
                                        </button>

                                        <!--scrollbar Modal -->
                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Scrolling
                                                            Modal</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Biscuit powder jelly beans. Lollipop candy canes croissant
                                                            icing
                                                            chocolate cake. Cake fruitcake
                                                            powder pudding pastry.
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy
                                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes
                                                            lemon drops
                                                            danish dessert I love
                                                            caramels powder.
                                                        </p>
                                                        <p>
                                                            Chocolate cake icing tiramisu liquorice toffee donut sweet
                                                            roll cake.
                                                            Cupcake dessert icing
                                                            dragée
                                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                                                            candy canes
                                                            lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie
                                                            roll carrot cake soufflé halvah.
                                                            Biscuit powder jelly beans. Lollipop candy canes croissant
                                                            icing
                                                            chocolate cake. Cake fruitcake
                                                            powder pudding pastry.
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy
                                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes
                                                            lemon drops
                                                            danish dessert I love
                                                            caramels powder
                                                        </p>
                                                        <p>
                                                            Chocolate cake icing tiramisu liquorice toffee donut sweet
                                                            roll cake.
                                                            Cupcake dessert icing
                                                            dragée
                                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                                                            candy canes
                                                            lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie
                                                            roll carrot cake soufflé halvah.
                                                            Biscuit powder jelly beans. Lollipop candy canes croissant
                                                            icing
                                                            chocolate cake. Cake fruitcake
                                                            powder pudding pastry.
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy
                                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes
                                                            lemon drops
                                                            danish dessert I love
                                                            caramels powder.
                                                        </p>
                                                        <p>
                                                            Chocolate cake icing tiramisu liquorice toffee donut sweet
                                                            roll cake.
                                                            Cupcake dessert icing
                                                            dragée
                                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                                                            candy canes
                                                            lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie
                                                            roll carrot cake soufflé halvah.
                                                            Biscuit powder jelly beans. Lollipop candy canes croissant
                                                            icing
                                                            chocolate cake. Cake fruitcake
                                                            powder pudding pastry.
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy
                                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes
                                                            lemon drops
                                                            danish dessert I love
                                                            caramels powder.
                                                        </p>
                                                        <p>
                                                            Chocolate cake icing tiramisu liquorice toffee donut sweet
                                                            roll cake.
                                                            Cupcake dessert icing
                                                            dragée
                                                            dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                                                            candy canes
                                                            lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie
                                                            roll carrot cake soufflé halvah.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>

                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Scrolling long Content Inside Modal</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can also create a scrollable modal that allows scroll the modal body by
                                            adding
                                            <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.
                                        </p>
                                        <!-- Button trigger for scrolling content modal -->
                                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalScrollable">
                                            Launch demo modal
                                        </button>

                                        <!--scrolling content Modal -->
                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                                                            Scrolling long
                                                            Content</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Biscuit powder jelly beans. Lollipop candy canes croissant
                                                            icing
                                                            chocolate cake. Cake fruitcake
                                                            powder pudding pastry
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy
                                                            gummi bears pudding pie apple pie cookie. Cheesecake jujubes
                                                            lemon drops
                                                            danish dessert I love
                                                            caramels powder
                                                        </p>
                                                        <p>
                                                            Chocolate cake icing tiramisu liquorice toffee donut sweet
                                                            roll cake.
                                                            Cupcake dessert icing
                                                            dragée dessert. Liquorice jujubes cake tart pie donut.
                                                            Cotton candy
                                                            candy canes lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie roll carrot cake soufflé halvah. Biscuit powder
                                                            jelly beans.
                                                            Lollipop candy canes
                                                            croissant icing chocolate cake. Cake fruitcake powder
                                                            pudding pastry.
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy gummi bears pudding pie apple pie cookie. Cheesecake
                                                            jujubes lemon
                                                            drops danish dessert I
                                                            love caramels powder.
                                                        </p>
                                                        <p>
                                                            dragée dessert. Liquorice jujubes cake tart pie donut.
                                                            Cotton candy
                                                            candy canes lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie roll carrot cake soufflé halvah.Biscuit powder jelly
                                                            beans.
                                                            Lollipop candy canes croissant
                                                            icing chocolate cake. Cake fruitcake powder pudding pastry.
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy gummi bears pudding pie apple pie cookie. Cheesecake
                                                            jujubes lemon
                                                            drops danish dessert I
                                                            love caramels powder.
                                                        </p>
                                                        <p>
                                                            Chocolate cake icing tiramisu liquorice toffee donut sweet
                                                            roll cake.
                                                            Cupcake dessert icing
                                                            dragée dessert. Liquorice jujubes cake tart pie donut.
                                                            Cotton candy
                                                            candy canes lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie roll carrot cake soufflé halvah. Biscuit powder
                                                            jelly beans.
                                                            Lollipop candy canes
                                                            croissant icing chocolate cake. Cake fruitcake powder
                                                            pudding pastry.
                                                        </p>
                                                        <p>
                                                            Tootsie roll oat cake I love bear claw I love caramels
                                                            caramels halvah
                                                            chocolate bar. Cotton
                                                            candy gummi bears pudding pie apple pie cookie. Cheesecake
                                                            jujubes lemon
                                                            drops danish dessert I
                                                            love caramels powder.
                                                        </p>
                                                        <p>
                                                            Chocolate cake icing tiramisu liquorice toffee donut sweet
                                                            roll cake.
                                                            Cupcake dessert icing
                                                            dragée dessert. Liquorice jujubes cake tart pie donut.
                                                            Cotton candy
                                                            candy canes lollipop liquorice
                                                            chocolate marzipan muffin pie liquorice.
                                                        </p>
                                                        <p>
                                                            Powder cookie jelly beans sugar plum ice cream. Candy canes
                                                            I love
                                                            powder sugar plum tiramisu.
                                                            Liquorice pudding chocolate cake cupcake topping biscuit.
                                                            Lemon drops
                                                            apple pie sesame snaps
                                                            tootsie roll carrot cake soufflé halvah.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disabled Animation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            For modals that simply appear rather than fade in to view, remove the
                                            <code>.fade</code>
                                            class from your
                                            modal markup.
                                        </p>
                                        <!-- Button trigger for disabled animation modal -->
                                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                            data-bs-target="#animation">
                                            Launch demo modal
                                        </button>

                                        <!-- disabled animation Modal -->
                                        <div class="modal text-left" id="animation" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel6" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel6">Disabled Animation
                                                        </h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Chocolate bar jelly dragée cupcake chocolate bar I love
                                                            donut liquorice.
                                                            Powder I love marzipan
                                                            donut candy canes jelly-o. Dragée liquorice apple pie candy
                                                            biscuit
                                                            danish lemon drops sugar plum.
                                                        </p>
                                                        <div class="alert bg-rgba-success" role="alert">
                                                            <span class="text-bold-600">Well done!</span>
                                                            You successfully read this important alert
                                                            message.
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form and scrolling Components end -->
            </div>
            

            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/btm_script.php") ?>
</body>

</html>