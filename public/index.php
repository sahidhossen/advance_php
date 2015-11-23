<?php
global $main_page;
$subpage = new sub_page();
 echo $_SESSION['username'];
?>
<?php include('header.php'); ?>

<?php include("sidebar.php"); ?>

         <div class="col-md-9 content">
            <div class="content-area row">

                <div class="col-md-4">
                    <div class="pages">
                        <p class="text-center icon"> <span class="fa fa-html5"></span></p>
                        <h3 class="title title-color"><a href="#">HTML </a> </h3>
                        <article>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum cupiditate eius esse hic, magnam perferendis possimus reprehenderit rerum voluptatem! Ad blanditiis cum dolore iusto minus praesentium quidem vel veniam.</p>
                        </article>
                        <p class="text-right"><a class="more_link" href="#"> More..<span class="fa fa-chevron-right"></span>  </a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pages">
                        <p class="text-center icon"> <span class="fa fa-css3"></span></p>
                        <h3 class="title title-color"><a href="#">CSS </a> </h3>
                        <article>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum cupiditate eius esse hic, magnam perferendis possimus reprehenderit rerum voluptatem! Ad blanditiis cum dolore iusto minus praesentium quidem vel veniam.</p>
                        </article>
                        <p class="text-right"><a class="more_link" href="#">More.. <span class="fa fa-chevron-right"></span>  </a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pages">
                        <p class="text-center icon"> <span class="fa fa-html5"></span></p>
                        <h3 class="title title-color"><a href="#"> Javascript </a> </h3>
                        <article>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum cupiditate eius esse hic, magnam perferendis possimus reprehenderit rerum voluptatem! Ad blanditiis cum dolore iusto minus praesentium quidem vel veniam.</p>
                        </article>
                        <p class="text-right"><a class="more_link" href="#">More.. <span class="fa fa-chevron-right"></span </a></p>
                    </div>
                </div> <div class="col-md-4">
                    <div class="pages">
                        <p class="text-center icon"> <span class="fa fa-html5"></span></p>
                        <h3 class="title title-color"><a href="#"> PHP </a> </h3>
                        <article>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum cupiditate eius esse hic, magnam perferendis possimus reprehenderit rerum voluptatem! Ad blanditiis cum dolore iusto minus praesentium quidem vel veniam.</p>
                        </article>
                        <p class="text-right"><a class="more_link" href="#"> More..<span class="fa fa-chevron-right"></span></a></p>
                    </div>
                </div>



            </div>
         </div>



<?php include('footer.php'); ?>
