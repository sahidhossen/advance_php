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

                <?php
                $request = $_SERVER['REQUEST_URI'];

                $params = split("/", removeSlash($request));
                $safe_pages = array("contact", "home", "prices", "portfolio");
                $dirs = array("errors", "admin");
                array_shift($params);
                var_dump($params);
               echo  $action = isset($params[1]) && !empty($params[1])?$params[1]:'index';
                if(in_array($action, $safe_pages)) {
                   // include($params[0]."/".$params[1].".php"); // Something like that?
                    var_dump($params);
                } else {
                  //  include("404.php");
                    echo "error";
                }

                $subpage = new sub_page();
                $result = $subpage->get_page_by_mainPage(1);
                pretty_print($result);

                ?>

            </div>
         </div>



<?php include('footer.php'); ?>
