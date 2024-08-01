
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


	</head>

	<body>

   <?php $this->load->view('admin/include/header');?>
   <?php $this->load->view('admin/include/left');?>
   <!-- Content wrapper scroll start -->




		<div class="content-wrapper-scroll">

     <!-- --------------------------- 1st sectioin start ---------------------- -->

     <section>
        <div class="container">
            <div class="row">
                    <p style="padding:2rem;"><span style="font-size:2rem;color:#245fae;">Add Mentor Member</span><span class="float-end">Home / Add Mentor Member</span></p>
                    <p style="margin-top:-2.8rem;"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info float-end"><i class="bi bi-plus-square"></i> Add Mentor Member</button>&nbsp;&nbsp;&nbsp;</p>
                   
                <div class="col-md-12">
                <!-- --------------------------- table section start -------------------------  -->
                <div class="card">
									<div class="card-header">
										<!-- <div class="card-title">API Call Backs</div> -->
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                   
                      <div class="row"><div class="col-sm-12"><table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
												<thead>
													<tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:1rem;">S.No</th>
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Mentor Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:104.453px;">Mentor Post</th>
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:106.453px;">Designation</th>
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:66.453px;">Status</th>
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:120.4844px;">Action</th>
                         </tr>                  
												</thead>

                                      
                   
                        <tbody>
                            <?php foreach($mentorData as $m => $menDa) { ?> 
                                <tr>
                                    <td style="padding-left:1.5rem;"><?php echo $m +1 ?></td>
                                    <td><?php echo $menDa['m_name'] ?></td>
                                    <td><?php echo $menDa['m_email'] ?></td>  
                                    <td><?php echo $menDa['m_designation'] ?></td>  
                                    <td>
                                    <?php
                                        $status = ($menDa['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $menDa['id'] . "\",\"0\",\"mentor\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><span class='badge shade-green'><i class='bi bi-caret-right-fill'></i>Working </span>  </b></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $menDa['id'] . "\",\"1\",\"mentor\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><span class='badge shade-yellow'><i class='bi bi-caret-right-fill'></i>Deactive</span></b></a>";
                                        echo "<span id=".$menDa['id'].">".$status."</span>";
                                        ?>&emsp;
                                    </td>  
                                    <td>
                                         <a href="javaScript:void();" class="viewCla" onclick="viewDatafun(<?php  echo $menDa['id'] ?>)"  data-bs-toggle="modal" data-bs-target="#viewSectorData"><i class="bi bi-eye-slash-fill"></i></a>
                                         <a href="javaScript:void();" class="editBtn" onclick="editDAtaFun(<?php  echo $menDa['id'] ?>)"  data-bs-toggle="modal" data-bs-target="#editMentorModel"><i class="bi bi-pencil-square"></i></a>
                                         <a href="javaScript:void();" class="checkCla" onclick="deleteDAta(<?php echo $menDa['id'] ?>)"><i class="bi bi-trash"></i></a>
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
        </div>
     </section>
     <!-- --------------------------- 1st sectioin end ---------------------- -->



     <!-- ============================== adding data model section start for view start ========================= -->

	<!-- Card start -->
 
								
								

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">
                            Add Mentor Member *
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
												
                            <!-- -----------  body section start ---------------  -->
                            <div class="container">
                              <form action="" id="addData" method="post" >
                                <div class="row">
          
                                     <div class="col-md-6"> 
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Name *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="m_name" id="m_name" class="form-control" placeholder="Enter Name ">
                                     </div>
                                     </div>
                                     </div>
                                     <div class="col-md-6">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Email *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="email" name="m_email" id="m_email" class="form-control" placeholder="Enter Email Id">
                                     </div>
                                     </div>
                                     </div>
                                     <div class="col-md-6">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Enter Password *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="m_password" id="m_password" class="form-control" placeholder="Enter Your Password">
                                     </div>
                                     </div>
                                     </div>
                                     <div class="col-md-6">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Mobile Number *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="m_mobile" id="m_mobile" class="form-control" placeholder="Enter Mobiel Number">
                                     </div>
                                     </div>
                                     </div>
                                     <div class="col-md-6">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Date Of Birth *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="date" name="m_dob" id="m_dob" class="form-control" placeholder="Enter Date Of Birth">
                                     </div>
                                     </div>
                                     </div>
                                     <div class="col-md-6">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Designation *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="m_designation" id="m_designation" class="form-control" placeholder="Enter Designation">
                                     </div>
                                     </div>
                                     </div>
                                     <div class="col-md-6">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Address *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="m_address" id="m_address" class="form-control" placeholder="Enter Address">
                                     </div>
                                     </div>
                                     </div>
                                     <div class="col-md-6">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Image *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="file" name="photo" id="photo" class="form-control" placeholder="Choose Your Image">
                                     </div>
                                     </div>
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
                          </form>
												</div>
											</div>
										</div>
									</div>
					
								<!-- Card end -->

     <!-- ============================== adding data model section start for view end ============================  -->


     <!-- ====================================  view section start ===================================  -->
     

                  <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
										<!-- Modal -->
										<div class="modal fade" id="viewSectorData" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header" style="border-top:6px solid #245fae;">
														<h5 class="modal-title" id="exampleModalLabel">
                           Mentor Member Details
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                            <div class="container"  id="viewDetails">
                             
                            </div>
                          </div>
												</div>
											</div>
                  </div>  
								
     <!-- ====================================  view section end ===================================  -->

     
     <!-- ====================================  edit section start ===================================  -->
     
				
							
         <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
										<!-- Modal -->
										<div class="modal fade" id="editMentorModel" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
                      <div class="modal-dialog modal-lg">

												<div class="modal-content">
												 <form action="" method="post" id="updateMentorDetails">
                         <div class="modal-header" style="border-top:6px solid #245fae;">
														<h5 class="modal-title" id="exampleModalLabel">
														Update Mentor Data
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
                          <form action="" method="post" id="updateSectorData">
													<div class="modal-body" >
                            <div class="container">
                              <div class="row" id="editMentorDetails"></div>
                            </div>
                          </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
														<button type="submit" name="submit" class="btn btn-primary">
															Save changes
														</button>
													</div>
                         </form>
												</div>
											</div>
                  </div> 

     <!-- ====================================  edit section end ===================================  -->

    

	</div>
	<!-- Content wrapper scroll end -->
  <?php $this->load->view('admin/include/footer');?>
	<?php $this->load->view('admin/include/js');?>


  <script>

$("#addData").on("submit",function(e){
  e.preventDefault();
      $.ajax({
        type:"post",
        url: '<?= base_url() ?>' + 'admin/addMentor/addMenTorData',
          data:new FormData(this),
          processData: false,
          contentType: false,
          cache: false,
          async: false,
          success: function(data) {
              console.log(data);
              window.location.reload(true);               
          }
      });
  });

  function editDAtaFun(id) {
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'admin/addMentor/editData',
                data: {
                    'id': id
                },
                success: function(data) {
                    console.log(data);
                    $('#editMentorDetails').html(data);
                },
            });
        }

  
  function deleteDAta(id) {   
            $.ajax({
              type: "POST",
                url: '<?= base_url() ?>' + 'admin/addMentor/deleteData',
                data: {
                    'id': id
                },
                success: function(data) {
                  console.log(data);
              window.location.reload(true); 
                },
            });
        }

        $("#updateMentorDetails").on("submit", function(e) {
            // alert("Update Mentor Details....");
            e.preventDefault();
            $.ajax({
                url: '<?= base_url() ?>admin/addMentor/updateMentorData',
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);
                }
            });
        });


         function viewDatafun(id)
        {
          $.ajax({
              type: "POST",
              url: '<?= base_url() ?>' + 'admin/addMentor/viewDAta',
                data: {
                    'id': id
                },
                success: function(data) {
                  console.log(data);
                  $('#viewDetails').html(data); 
                },
            });
        }

  


  </script>

	</body>


</html>