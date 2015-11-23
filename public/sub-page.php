<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 23-11-15
 * Time: 19.52
 */
global $main_db;
$subpage = new sub_page();
$current_page = $subpage->get_page_by_id( $_GET['page'] );

include('header.php');
include('sidebar.php');
?>
    <div class="col-md-9">

        <h1 class="title">  <?php echo $current_page->name; ?>  </h1>
        <div class="page-content">
            <?php echo $current_page->desc; ?>
        </div>
    </div>

<?php
include('footer.php');