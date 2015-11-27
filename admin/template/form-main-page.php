
<h1> Create your page </h1>
<?php 
global $main_page, $main_db, $sesion;

 $error = array();
if(isset($_POST['main_page_submition'])){ 
 

    $page_name = $_POST['page_name']; 
    $position = $_POST['position']; 
    $desc   = $_POST['desc']; 


   if($page_name == '' || strlen($page_name) < 4  ){ 
        $error[] = "Please check out page name. Page should be minimum 4 character"; 
    }elseif( $position ==0 ){
        $error[] = "Please select a position"; 
    }elseif( $desc == '' && strlen($desc) <10  ) {
        $error[] = 'Please type about the page description';
    }


    if( count($error) < 1  ){
        $data = array(
                'name'=>$page_name, 
                'desc' =>$desc, 
                'position'=>$position,
                'date'=>date('Y-m-d'),
            );  
        $query = $main_page->insert_page_data( $data );

        if( $query ){
            $sesion->message("You page has been created".$query); 
             safe_redirect(admin_url('create-page'));
           
        }else {
             
            echo "Your Page did not created";
        }
    }
}?>
<div class="form col-md-8">

	<form method="post" action="">
		<div class="row form-group">
			<label class="col-md-4"> Page Name </label>
			<div class="col-md-8"> 
				<input name="page_name" type="text" class="form-control" value="<?php if(isset($page_name)) echo $page_name;?>" placeholder="Page Name"> 
			</div>
		</div>
		<div class="row form-group">
			<label class="col-md-4"> Position </label>
			<div class="col-md-8"> 
				<?php   $total_page = $main_page->total_page(); ?>
				<select name="position" class="form-control">
					<option value="0"> Select  </option> 
					<?php for($i=1; $i<=$total_page+1; $i++ ): 
						$select = ($total_page+1 == $i ) ? $select="selected" : '';
					?>
					<option <?php echo $select; ?> value="<?php echo $i; ?>"> <?php echo $i; ?> </option> 
				<?php endfor; ?>
				 
				</select>
			 </div>
		</div>
		<div class="row form-group">
				<label class="col-md-4"> Descrtion </label>
			<div class="col-md-8"> 
				 <textarea name="desc" class="form-control" rows="8"><?php if(isset($desc)) echo $desc;?></textarea> 
			</div>

		</div>

		<div class="row form-group">
			<p class="text-center">  <input name="main_page_submition" type="submit" class="btn btn-success btn-md" value="Submit"></p>

		</div>

	</form>
</div>


<div class="col-md-4">
		<?php
		 
			if(count($error) > 0 ){ 
				echo implode('<br/>',$error);
			}
		 ?>

</div> 