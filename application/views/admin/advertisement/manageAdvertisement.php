
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
    .checkMan{color:green;font-size:1.5rem;}
    .checkManWro{color:red;font-size:1.5rem;}
  </style>
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
                    <p style="padding:2rem;"><span style="font-size:2rem;color:#245fae;">Create Advertisement </span><span class="float-end">Home / Create Advertisement</span></p>
                    <p style="margin-top:-2.8rem;"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info float-end"><i class="bi bi-plus-square"></i>Create Advertisement</button>&nbsp;&nbsp;&nbsp;</p>
                   
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Title</th>
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:166.453px;">Images</th>
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:120.4844px;">Action</th>
                         </tr>                  
												</thead>

                      
                   
                        <tbody>
                            <?php foreach($advertise as $ad => $adVer) { ?> 
                                <tr>
                                    <td style="padding-left:1.5rem;"><?php echo $ad +1 ?></td>
                                    <td><?php echo $adVer['title'] ?></td>
                                    <td><?php echo $adVer['photo'] ?></td>  
                                    <td>
                                         <!-- <a href="javaScript:void();" class="viewCla" onclick="viewDatafun(<?php// echo $adVer['id'] ?>)"  data-bs-toggle="modal" data-bs-target="#viewSectorData"><i class="bi bi-eye-slash-fill"></i></a> -->
                                         <!-- <a href="javaScript:void();" class="editCla" onclick="editData(<?php// echo $adVer['id'] ?>)" data-bs-toggle="modal" data-bs-target="#editSecDAta"><i class="bi bi-pencil-square"></i></a> -->

                                         <?php
                                        $status = ($adVer['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $adVer['id'] . "\",\"0\",\"advertisement\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-all checkMan'></i> </b></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $adVer['id'] . "\",\"1\",\"advertisement\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-x checkManWro'></i></b></a>";
                                        echo "<span id=".$adVer['id'].">".$status."</span>";
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
        </div>
     </section>
     <!-- --------------------------- 1st sectioin end ---------------------- -->



     <!-- ============================== adding data model section start for view start ========================= -->

	<!-- Card start -->
 
								
								

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">
                            Create New Sectors
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
												
                            <!-- -----------  body section start ---------------  -->
                            <div class="container">
                                <div class="row">

                                  <form action="" id="addAdvertesiment" method="post">
                                  <div class="col-md-12">
                                     <div class="card-body pt-2 pb-2">
                                     <label for="">Enter Title *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                                     </div>
                                     </div>
                                     </div>

                                     <div class="col-md-12" style="margin-top:0.5rem;margin-bottom:2rem;">
                                     <div class="card-body">
                                     <label for="">Choose Your File *</label>
                                     <div class="input-group">
                                     <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                     <input type="file" name="photo" id="photo" class="form-control" placeholder="Enter  Description">
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
                            Sector Details
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                            <div class="container"  id="viewDetails"></div>
                          </div>
												</div>
											</div>
                  </div>  
								
     <!-- ====================================  view section end ===================================  -->

     
     <!-- ====================================  edit section start ===================================  -->
     
				
							
         <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
										<!-- Modal -->
										<div class="modal fade" id="editSecDAta" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
												 <form action="" method="post" id="updateSecdetails">
                         <div class="modal-header" style="border-top:6px solid #245fae;">
														<h5 class="modal-title" id="exampleModalLabel">
														Update Sector Data
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
                          <form action="" method="post" id="updateSectorData">
													<div class="modal-body" >
                            <div class="container">
                              <div class="row" id="editSecdetails"></div>
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

$("#addAdvertesiment").on("submit",function(e){
  alert("hello advertesiment");
  e.preventDefault();
      $.ajax({
          url : '<?= base_url() ?>admin/Advertisement/addAdverM',
          type:"post",
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


  </script>

	</body>


</html>