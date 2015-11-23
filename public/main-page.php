<?php include('header.php'); ?>
<?php include("sidebar.php"); ?>

<div class="col-md-9">
   <?php
   global $main_page;
   $subpage = new sub_page();
   //   Get current page information
   $page= $main_page->get_page_by_id($_GET['page']);
   ?>
   <h1 class="title text-center"> <?php echo $page->name; ?> </h1>
   <div class="contents">
      <p> <?php echo $page->desc; ?>  </p>
   </div>
   <div class="related-post">
      <?php

      //   Get related subpage from this main page
      $subpagess = $subpage->get_page_by_mainPage($page->id);
      if($subpagess !=NULL ) {
         foreach ($subpagess as $single_page): ?>
            <div class="col-md-4">
               <h3 class="title text-center"> <?php echo $single_page->name; ?></h3>

               <div class="page-content">
                  <?php echo $single_page->desc; ?>
                  <p><a href="<?php echo get_home_url(); ?>/sub-page.php?page=<?php echo $single_page->id; ?>">
                        More </a></p>
               </div>
            </div>
         <?php endforeach;

      }else{
         ?>
          <h3 class="title text-center">
             Our Letest posts is comming soon
          </h3>

          <?php } ?>




   </div>


</div>

<?php include('footer.php'); ?>