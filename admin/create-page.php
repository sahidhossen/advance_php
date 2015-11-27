<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

    <!-- Page content -->
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title gray"> Create a page </h1>

                    <?php
                    global $sesion; 
                    echo $sesion->message(); 
                       
                        if($_GET['page']=='main'){
                            include(ADMIN_DIR.'template/form-main-page.php');
                        }elseif ($_GET['page']=='sub_page') {
                               include(ADMIN_DIR.'template/form-sub-page.php');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>