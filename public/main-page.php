<?php include('header.php'); ?>
<?php include("sidebar.php"); ?>

<div class="col-md-9">
   <?php
   global $main_page;
   $get_page = $main_page->get_page_by_id($_GET['page']);
   pretty_print($get_page);

   ?>

</div>

<?php include('footer.php'); ?>