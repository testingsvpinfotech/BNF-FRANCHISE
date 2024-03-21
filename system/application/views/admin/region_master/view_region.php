     <?php $this->load->view('admin/admin_shared/admin_header'); ?>
    <!-- END Head-->
<style>
  .buttons-copy{display: none;}
  .buttons-csv{display: none;}
  /*.buttons-excel{display: none;}*/
  .buttons-pdf{display: none;}
  .buttons-print{display: none;}
  #example_filter{display: none;}
  .input-group{
    width: 60%!important;
  }
</style>
    <!-- START: Body-->
    <body id="main-container" class="default">
        
        <!-- END: Main Menu-->
    <?php $this->load->view('admin/admin_shared/admin_sidebar');
   // include('admin_shared/admin_sidebar.php'); ?>
        <!-- END: Main Menu-->
    
        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Listing-->
                <div class="row">                 
                  <div class="col-12  align-self-center">
                      <div class="col-12 col-sm-12 mt-3">
                      <div class="card">
                          <div class="card-header justify-content-between align-items-center">                               
                              <h4 class="card-title">Domestic Zone Master</h4>
                              <span style="float: right;"><a href="<?php base_url();?>admin/add-region" class="btn btn-primary">
         Add Zone Details</a></span>
                          </div>
                          <div class="card-body">
                             <?php if($this->session->flashdata('notify') != '') {?>
  <div class="alert <?php echo $this->session->flashdata('class'); ?> alert-colored"><?php echo $this->session->flashdata('notify'); ?></div>
  <?php  unset($_SESSION['class']); unset($_SESSION['notify']); } ?> 
                              <div class="table-responsive">
                                  <table id="example" class="display table dataTable table-striped table-bordered" data-filtering="true" data-paging="true" >
                                      <thead>
                                          <tr>
                                              <th scope="col">Id</th>
                                              <th scope="col">Zone</th>                                             
                                              <th scope="col">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                 <?php 
                                  if (!empty ($allregiondata)){
                                    $cnt=0;
                                    foreach ($allregiondata as $rgn) {
                                      $cnt++;
                                  ?>
                                  <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $rgn['region_name'];?></td>
                                    <td> 
                                     <a href="<?php base_url();?>admin/edit-region/<?php echo $rgn['region_id'];?>" title="Edit"><i class="ion-edit" style="color:var(--primarycolor)"></i></a>
                                     <button title="Delete" class="deletedata" relid = "<?php echo $rgn['region_id']; ?>"><i class="ion-trash-b" style="color:var(--danger)"></i></button>
                                     <!--<a href="<?php base_url();?>admin/delete-region/<?php echo $rgn['region_id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="ion-trash-b" style="color:var(--danger)"></i></a>-->
                                      </td>
                                    </tr>
                                    <?php 
                                  }
                            }
                             else{
                            echo "<p>No Data Found</p>";
                             } ?>
                                </tbody>
                                  </table> 
                              </div>
                          </div>
                        </div> 

                    </div>
                    </div>
                </div>
                <!-- END: Listing-->
            </div>
        </main>
        <!-- END: Content-->
        <!-- START: Footer-->
        <?php $this->load->view('admin/admin_shared/admin_footer');
         //include('admin_shared/admin_footer.php'); ?>
        <!-- START: Footer-->
    </body>
    <!-- END: Body-->
    
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<script>
    $(document).ready(function() {
      $('.deletedata').click(function(){
         // alert('hello')
        var getid = $(this).attr("relid");
       alert(getid);
       var baseurl = '<?php echo base_url();?>'
       	swal({
		  	title: 'Are you sure?',
		  	text: "You won't be able to revert this!",
		  	icon: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#3085d6',
		  	cancelButtonColor: '#d33',
		  	confirmButtonText: 'Yes, delete it!',
		}).then((result) => {
		  	if (result.value){
		  		$.ajax({
			   		url: baseurl+'Admin_region/delete_region',
			    	type: 'POST',
			       	data: 'getid='+getid,
			       	dataType: 'json'
			    })
			    .done(function(response){
			     	swal('Deleted!', response.message, response.status);
			     	 location.reload();
			    })
			    .fail(function(){
			     	swal('Oops...', 'Something went wrong with ajax !', 'error');
			    });
		  	}
 
		})
 
	});
       
 });
</script>
  
</html>
