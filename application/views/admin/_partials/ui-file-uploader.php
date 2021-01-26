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
                            <h3>File Uploader</h3>
                            <p class="text-subtitle text-muted">File uploader that makes user easier to upload their files</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">File Uploader</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Basic File Uploader</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic file uploader up, upload here to see how
                                            <code>.basic-filepond</code> look.
                                        </p>
                                        <!-- Basic file uploader -->
                                        <input type="file" class="basic-filepond">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">ImgBB Uploader</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic file uploader up, upload here to see how
                                            <code>.imgbb-filepond</code>-based basic file uploader look. You must use
                                            <code>name=image</code> or by FormData fieldName for your 
                                            input <code>type=file</code> to upload in imgBB.
                                        </p>
                                        <!-- imgBB file uploader -->
                                        <input type="file" name="image" class="imgbb-filepond">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Multiple Files</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic table up, upload here to see how
                                            <code>.multiple-files-filepond</code>-based basic file uploader look. You can use
                                            <code>allowMultiple</code> or <code>multiple</code> attribute too to implement multiple upload.
                                        </p>
                                        <!-- File uploader with multiple files upload -->
                                        <input type="file" class="multiple-files-filepond" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">With Validation</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic table up, upload here to see how
                                            <code>.with-validation-filepond</code>-based basic file uploader look. You can use 
                                            <a href="https://pqina.nl/filepond/docs/patterns/plugins/file-validate-size/#properties" target="_blank">see here</a>
                                            or <code>required (to make your input required), data-max-file-size (to limit your input file size), 
                                            data-max-files (to limit your uploaded files), etc (start with data-)</code> attribute too to implement validation.
                                        </p>
                                        <!-- File uploader with validation -->
                                        <input type="file" class="with-validation-filepond" required multiple data-max-file-size="1MB" data-max-files="3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Image Preview</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic table up, upload here to see how
                                            <code>.image-preview-filepond</code>-based basic file uploader look. This
                                            preview for uploaded or dropped images.
                                        </p>
                                        <!-- File uploader with image preview -->
                                        <input type="file" class="image-preview-filepond">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Image Exif Orientation</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic table up, upload here to see how
                                            <code>.image-exif-filepond</code>-based basic file uploader look. This 
                                            helps in correctly orienting photos taken on mobile devices.
                                        </p>
                                        <!-- Auto image crop file uploader -->
                                        <input type="file" class="image-exif-filepond">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Image Auto Crop</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic table up, upload here to see how
                                            <code>.image-crop-filepond</code>-based basic file uploader look. You can use
                                            <code>imageCropAspectRatio</code> or <code>image-crop-aspect-ratio</code> to
                                            set aspect ratio.
                                        </p>
                                        <!-- Auto crop image file uploader -->
                                        <input type="file" class="image-crop-filepond" image-crop-aspect-ratio="1:1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Image Auto Filter</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic table up, upload here to see how
                                            <code>.image-filter-filepond</code>-based basic file uploader look. 
                                        </p>
                                        <!-- Auto filter image file uploader -->
                                        <input type="file" class="image-filter-filepond">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Image Auto Resize</h5>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Using the basic table up, upload here to see how
                                            <code>.image-resize-filepond</code>-based basic file uploader look. 
                                        </p>
                                        <!-- Auto resize image file uploader -->
                                        <input type="file" class="image-resize-filepond">
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