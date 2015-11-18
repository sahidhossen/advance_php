<?php include('header.php'); ?>

<?php include("sidebar.php"); ?>

         <div class="col-md-8 content"> 
            <?php 

               if(isset($_GET['page'])=="about"):
                    
                    include("about.php");
                
               else:
            ?> 
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium atque autem consectetur cupiditate deleniti, dolorem ducimus, esse eum id illum iste laudantium libero magnam non obcaecati odit possimus ullam.</p>
            <?php endif ?>

             <pre>
                 <?php  //var_dump($_SERVER); ?>
             </pre>
             <?php
           echo get_stylesheet_files('style');
//             echo get_root_folder(); ?>
         </div>



<?php include('footer.php'); ?>
