<!DOCTYPE html>
<html lang="zxx">
<?php $this->load->view('layout/header'); ?>
<body>

<div class="page_loader"></div>

<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Error404 content start -->
                <div class="error404-content">
                    <h1>404</h1>
                    <h2>Sorry, But the Page Was not Found</h2>
                    <p>You may have mistyped the address or the page may have moved.</p>
                    <form action="index.html" method="post">
                        <button type="submit" class="button-sm out-line-btn">Back to home page</button>
                    </form>
                </div>
                <!-- Error404 content end -->
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layout/bottom'); ?>
</body>
</html>
