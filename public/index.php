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
           global $main_db;
           $result =  $main_db->get_results("SELECT * FROM  `main_page`");
//             echo $main_db->last_query;
             foreach($result as $data) {
                 echo $data->name . ",";
             }
        global $main_page;
             $allResult = $main_page->get_page_by_id(3);
            echo  $main_db->last_error;
             ?>
             <pre>
            <?php  var_dump($allResult); ?>

             </pre>
         </div>



<?php include('footer.php'); ?>
