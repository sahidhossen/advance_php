<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php global $main_db; ?>
    <!-- Page content -->
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title gray"> Welcome To Admin Page</h1>
                    <div class="col-md-4">
                        <div class="main_panel">
                            <div class="panel-header">
                                <h3 class="panel-title"> Number of pages </h3>
                            </div>
                            <div class="panel-body">
                               <div class="count">
                                  <span class="post_name"> Total Pages </span> <span class="pageNo"> <?php echo $main_page->total_page(); ?> </span>
                               </div>
                            </div>
                            <div class="panel-footer">
                                <p> This is panel header </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="main_panel">
                            <div class="panel-header">
                                <h3 class="panel-title"> Number of pages </h3>
                            </div>
                            <div class="panel-body">
                                <div class="count">
                                    <span class="post_name"> Total Pages </span> <span class="pageNo"> <?php echo $main_page->total_page(); ?> </span>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <p> This is panel header </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>