<?php //echo "<pre>";print_r($caste); die;?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
    <title>Best Software Company || Camwel Solution </title>
    <meta http-equiv="X-UA-Compatible" content="">
    <meta content="" name="viewport" />
    <meta http-equiv="" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="google-site-verification" content="" />
    <meta name="robots" content="all" />
    <meta name="msvalidate.01" content="" />

	<?php $this->load->view('admin/include/css');?>
    <style>
        .menuMana:hover{color:black!important;background-color:white;font-weight:600;padding:1rem 2rem!important;margin-top:-0.5rem;margin-bottom:-0.6rem;border-radius:0.4rem 0rem;}
        .menuMana{color:black!important;background-color:white;font-weight:600;padding:1rem 2rem!important;margin-top:-0.5rem;margin-bottom:-0.6rem;border-radius:0.4rem 0rem;}
		.aaa{padding-left:1rem;padding-right:0.8rem;}
		.subCasMan{padding-left:1rem;padding-right:0.8rem;margin-left:-1rem;}
    </style>
	</head>

	<body>

   <?php $this->load->view('admin/include/header');?>
   <?php $this->load->view('admin/include/left');?>
   <!-- Content wrapper scroll start -->



		<div class="content-wrapper-scroll">
        <section>
        <div class="container">
            <div class="row">
                    <p style="padding:2rem;"><span style="font-size:2rem;color:#245fae;">Create New Caste </span><span class="float-end">Home / Create New Caste</span></p>
                    <p style="margin-top:-2.8rem;"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info float-end"><i class="bi bi-plus-square"></i> Create New Caste</button>&nbsp;&nbsp;&nbsp;</p>
    

               <section>
               			<div class="card">
							<div class="card-body">
								<div class="custom-tabs-container">
								<ul class="nav nav-tabs" id="customTab3" role="tablist">
										<li class="nav-item" role="presentation">
											<a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="bi bi-box-seam"></i>Caste</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="bi bi-pie-chart"></i>Sub Caste</a>
										</li>
									
										
									</ul>
									<div class="tab-content" id="customTabContent3">
										<div class="tab-pane fade active show" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">
											<div class="row gx-3">
												<!-- ============================================================ 1st menu start ============================= -->
												<div class="col-md-12" id="1st">
		<!-- --------------------------- table section start -------------------------  -->
		 <div class="card-body staPag"  >
								<div class="table-responsive">
									<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row">                                        
								<div class="row"><div class="col-sm-12"><table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
										<thead>
											<tr>
											<th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:3rem;">S.No</th>
											<th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Caste Category</th>
											<!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
											<!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
									 <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>  
									</tr>                  
									</thead>

									   <tbody>
					<?php foreach($caste as $ca => $casDat) { ?> 
						<tr>
							<td style="padding-left:3.6rem;"><?php echo $ca +1 ?></td>
							<td><?php echo $casDat['caste'] ?></td>
							<td>

								 <?php
								$status = ($casDat['status'] == 1) ?
									"<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $casDat['id'] . "\",\"0\",\"caste\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green aaa'>Active</span></a>"                                     
									:
									"<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $casDat['id'] . "\",\"1\",\"caste\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Deactive</span></a>";
									
								echo "<span id=".$casDat['id'].">".$status."</span>";
								?>&emsp;
												</td>
										 </tr>
								 <?php } ?>
						</tbody>
											 
			  
									
									 
							   
							  
										<!-- ---------------- table body sectioin start --------------------  -->
										  
											<!-- ---------------- table body sectioin end --------------------  -->
										</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="apiCallbacks_info" role="status" aria-live="polite">Showing 1 to 5 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="apiCallbacks_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="apiCallbacks_previous"><a href="#" aria-controls="apiCallbacks" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="apiCallbacks" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="apiCallbacks_ellipsis"><a href="#" aria-controls="apiCallbacks" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="7" tabindex="0" class="page-link">12</a></li><li class="paginate_button page-item next" id="apiCallbacks_next"><a href="#" aria-controls="apiCallbacks" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
								</div>
							</div>
						</div>
		<!-- --------------------------- table section end -------------------------  -->
					  </div> 
											  <!-- ============================================================ 1st menu end ============================= -->
													
											</div>
										</div>
										<!-- ======================================= 2nd menu start ================================= -->
										<div class="tab-pane fade" id="twoAA" role="tabpanel" aria-labelledby="tab-twoAA">
										<div class="col-md-12" id="1st">
		<!-- --------------------------- table section start -------------------------  -->
		 <div class="card-body staPag"  >
								<div class="table-responsive">
									<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row">                                        
								  <div class="row"><div class="col-sm-12"><table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
										<thead>
											<tr>
											<th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:3rem;">S.No</th>
											<th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Sub Caste Category</th>
											<!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
											<!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
									 <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
									</tr>                  
										</thead>
										<tbody>
					<?php foreach($subcaste as $sc => $subca) { ?> 
						<tr>
							<td style="padding-left:3.6rem;"><?php echo $sc +1 ?></td>
							<td><?php echo $subca['caste'] ?></td>
							<td>

								 <?php
								$status = ($subca['status'] == 1) ?
									"<a class='aaa' href='javascript:void()' onClick='return changeStatus(\"" . $subca['id'] . "\",\"0\",\"caste\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green subCasMan'>Active</span></a>"
									
									:
									"<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $subca['id'] . "\",\"1\",\"caste\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Deactive</span></a>";
								echo "<span id=".$subca['id'].">".$status."</span>";
								?>&emsp;
												</td>
										 </tr>
								 <?php } ?>
						</tbody>                   
									
					  <!-- ---------------- table body sectioin start --------------------  -->
										  
											<!-- ---------------- table body sectioin end --------------------  -->
										</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="apiCallbacks_info" role="status" aria-live="polite">Showing 1 to 5 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="apiCallbacks_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="apiCallbacks_previous"><a href="#" aria-controls="apiCallbacks" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="apiCallbacks" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="apiCallbacks_ellipsis"><a href="#" aria-controls="apiCallbacks" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="7" tabindex="0" class="page-link">12</a></li><li class="paginate_button page-item next" id="apiCallbacks_next"><a href="#" aria-controls="apiCallbacks" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
								</div>
							</div>
						</div>
		<!-- --------------------------- table section end -------------------------  -->
					  </div>
											</div>
										<!-- ======================================= 2nd menu end ================================= -->
				





  

									</div>
								</div>
							</div>
						</div>
				
			   </section>
     <!-- --------------------------- 1st sectioin start ---------------------- -->
           
                         
                     </div>
		</div>			 
                 </section>
     <!-- --------------------------- 1st sectioin end ---------------------- -->





     <!-- ============================== adding data model section start for view start ========================= -->

	                  <!-- Card start -->
 
								
								

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">
                                                        Create Caste
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
												
                            <!-- -----------  body section start ---------------  -->
                            <div class="container">
                                <div class="row">

											<form action="" id="add_cast" method="post"> 
											<div class="col-md-12">
											
											
												 <div class="card-body main" id="main_menu">
											        <label for="">Caste Type: *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll main1" name="caste_type"  id="caste_type"  onchange="cross_check()" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                        <option value="1">Add Caste</option>
                                                        <option value="2">Add Sub Caste</option>
													     </select>
													 </div>
												   </div>
											
											
											<div class="col-md-12" id="caste_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Caste:  *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="caste" id="caste" class="form-control" placeholder="Enter Caste Name">
                                            
                                           
											</div>
											</div>
											</div>


                                               <div class="card-body" id="caste_drp_section" style="display:none;">
											        <label for="">Add Caste *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="caste_drp" id="caste_drp" onChange="return get_state(this.value)" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                       <?php foreach($caste as $cas):?>
                                                        <option value="<?php echo $cas['id'] ?>"><?php echo $cas['caste'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>



                                                 <div class="col-md-12" id="subCast_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
	                                                 <div class="card-body pt-2 pb-2">
		                                                 <label for="">Add Sub Caste: *</label>
			                                                    <div class="input-group">
				                                                    <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
				                                                    <input type="text" name="subcaste" id="subcaste" class="form-control" placeholder="Enter District Name">
			                                                    </div>
		                                                 </div>
                                                    </div>

                               	
											
											<!-- -----------  body section end ---------------  -->
											
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
														Close
													</button>
													<button type="submit" name="submit" class="btn btn-primary">
														Save Data
													</button>
												</div>
												</div>
											</form> 
											</div>
												</div>
											</div>
										</div>
									</div>
					
								<!-- Card end -->

     <!-- ============================== adding data model section start for view end ============================  -->


     


     
    

    

	</div>
	<!-- Content wrapper scroll end -->
  <?php $this->load->view('admin/include/footer');?>
	<?php $this->load->view('admin/include/js');?>


  <script>

$("#add_cast").on("submit",function(e){
//   alert("hello con");
  e.preventDefault();
      $.ajax({
          url : '<?= base_url() ?>admin/Caste/addCastDAta',
          type:"post",
          data:new FormData(this),
          processData: false,
          contentType: false,
          cache: false,
          async: false,
          success: function(data) {
              console.log(data);
            //   window.location.reload(true);               
          }
      });
  });


function cross_check() {
         
           let id=$('#caste_type').val();
		//    alert(id);
            if (id == 1) {
                $("#caste_section").show('slow');
                $("#caste_drp_section").hide('slow');
                $("#subCast_section").hide('slow');
            }else if(id == 2)
            {
                $("#caste_section").hide('slow');
                $("#caste_drp_section").show('slow');
                $("#subCast_section").show('slow');
            }
        }


     
  



    
    function get_state(id){
        alert(id);
            $.ajax({
                url : '<?= base_url() ?>admin/Location/get_state',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#district_drp').empty();
                    $('#district_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#district_drp').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });
        }


        function get_district(id){
            $.ajax({
                url : '<?= base_url() ?>admin/Location/get_district',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#police_drp').empty();
                    $('#police_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#police_drp').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

            $.ajax({
                url : '<?= base_url() ?>admin/Location/get_post',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#post_drp').empty();
                    $('#post_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#post_drp').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

        }



        function get_post(id){
            $.ajax({
                url : '<?= base_url() ?>admin/Location/get_post',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#block_drp').empty();
                    $('#block_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#block_drp').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });
        }





        $('#location_data').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url : '<?= base_url() ?>admin/Location/add_location',
            type : "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType: 'json',
            success: function(data) {
                if (data.icon == "error") {
                    var valid = '';
                    $.each(data.text, function(i, item){
                        valid += item;
                    });
                    Toast.fire({
                        icon: data.icon,
                        html: valid,
                    });
                }else{
                    Toast.fire({
                        icon: data.icon,
                        text: data.text
                    });
                    window.location.reload(true);
                }
            }
        });
        });

  

  
  </script>

	</body>


</html>