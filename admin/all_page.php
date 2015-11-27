<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
global $main_page, $sesion;

$All_pages = $main_page->get_all_pages();

?>
    <!-- Page content -->
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title gray"> All Pages </h1>
                    <p class="message message-success"> <?php echo $sesion->message(); ?> </p>
                    <div class="display_tables">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th> S.L </th>
                                <th>  Page Name </th>
                                <th>  Position  </th>
                                <th>  Date   </th>
                                <th>  Operation  </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if( $All_pages != NULL ):
                                $i = 0;
                                foreach( $All_pages as $single_page ):
                                ?>
                                <tr>
                                    <td> <?php echo $i++; ?> </td>
                                    <td>  <?php echo strtoupper( $single_page->name ) ; ?>  </td>
                                    <td>  <?php echo $single_page->position; ?>  </td>
                                    <td>  <?php echo date('D, M, Y', strtotime($single_page->date)); ?>   </td>
                                    <td>
                                        <a href="<?php echo admin_url('edit-page').'?page=main&id='.$single_page->id; ?>"> <span class="fa fa-edit fa-2x"></span>  </a> |
                                        <a href="<?php echo admin_url('delete-page').'?page=main&id='.$single_page->id; ?>"> <span class="fa fa-trash fa-2x"></span>  </a>
                                    </td>
                                </tr>
                                <?php
                                endforeach;
                                else: ?>
                                <tr>
                                    <td colspan="12"> <h3 class="title gray text-center"> There is no page created !  </h3> </td>

                                </tr>
                                <?php endif; ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>