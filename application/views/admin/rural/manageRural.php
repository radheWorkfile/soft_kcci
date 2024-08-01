<?php // echo "<pre>";print_r($block);die;?>


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
                    <p style="padding:2rem;"><span style="font-size:2rem;color:#245fae;font-family:Noto Serif, serif">Create Rural </span><span class="float-end">Home / Create Rural </span></p>
                    <p style="margin-top:-2.8rem;"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info float-end"><i class="bi bi-plus-square"></i>Create Rural</button>&nbsp;&nbsp;&nbsp;</p>
    

               <section>
               			<div class="card">
									<div class="card-body">
										<div class="custom-tabs-container">
                                        <ul class="nav nav-tabs" id="customTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="bi bi-box-seam"></i>District</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="bi bi-pie-chart"></i>Block Office</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="bi bi-headset"></i>Panchayat Name </a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#fourAA" role="tab" aria-controls="fourAA" aria-selected="false" tabindex="-1"><i class="bi bi-geo-fill"></i>Constituency Panchayat Name </a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#fiveAA" role="tab" aria-controls="fiveAA" aria-selected="false" tabindex="-1"><i class="bi bi-joystick"></i>Polling Booth Name. </a>
												</li>
                                                <li class="nav-item" role="presentation" style="padding-left:1rem;">
													<a class="nav-link" id="tab-sixAA" data-bs-toggle="tab" href="#sixAA" role="tab" aria-controls="sixAA" aria-selected="false" tabindex="-1"><i class="bi bi-journals"></i>Polling Booth No</a>
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">District</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>  
                                            </tr>                  
											</thead>

                                               <tbody>
                            <?php foreach($distr as $rD => $rDis) { ?> 
                                <tr>
                                    <td style="padding-left:3.6rem;"><?php echo $rD +1 ?></td>
                                    <td><?php echo $rDis['rural'] ?></td>
                                    <td>

                                         <?php
                                        $status = ($rDis['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $rDis['id'] . "\",\"0\",\"rural\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-all checkMan'></i> </b></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $rDis['id'] . "\",\"1\",\"rural\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-x checkManWro'></i></b></a>";
                                        echo "<span id=".$rDis['id'].">".$status."</span>";
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Block Office </th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>
                                                <tbody>
                            <?php foreach($block as $rB=> $rBlo) { ?> 
                                <tr>
                                    <td style="padding-left:3.6rem;"><?php echo $rB +1 ?></td>
                                    <td><?php echo $rDis['rural'] ?></td>
                                    <td>

                                         <?php
                                        $status = ($rBlo['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $rBlo['id'] . "\",\"0\",\"rural\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-all checkMan'></i></b></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $rBlo['id'] . "\",\"1\",\"rural\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-x checkManWro'></i> </b></a>";
                                        echo "<span id=".$rBlo['id'].">".$status."</span>";
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
                                                <!-- ======================================= 3rd menu start ================================= -->
												<div class="tab-pane fade" id="threeAA" role="tabpanel" aria-labelledby="tab-threeAA">
                <!-- --------------------------- table section start -------------------------  -->
                 <div class="card-body staPag"  >
										<div class="table-responsive">
											<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row">                                        
                                        <div class="row"><div class="col-sm-12"><table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
												<thead>
													<tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:3rem;">S.No</th>
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Panchayat Name</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>

                                                <tbody>
                                                 <?php foreach($panchayat as $rP => $rPan) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $rP +1 ?></td>
                                                  <td><?php echo $rPan['rural'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($rPan['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $rPan['id'] . "\",\"0\",\"rural\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-all checkMan'></i></b></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $rPan['id'] . "\",\"1\",\"rural\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-x checkManWro'></i> </b></a>";
                                                  echo "<span id=".$rPan['id'].">".$status."</span>";
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
                               <!-- ======================================= 3rd menu end ================================= -->
<!-- ======================================= 4th menu end ================================= -->
<div class="tab-pane fade" id="fourAA" role="tabpanel" aria-labelledby="tab-fourAA">
             <!-- --------------------------- table section start -------------------------  -->
             <div class="card-body staPag"  >
										<div class="table-responsive">
											<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row">                                        
                                        <div class="row"><div class="col-sm-12"><table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
												<thead>
													<tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:3rem;">S.No</th>
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Constituency Panchayat Name </th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>
                                                
                                                <tbody>
                                                 <?php foreach($constituencyPan as $rCo => $rConPan) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $rCo +1 ?></td>
                                                  <td><?php echo $rConPan['rural'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($rConPan['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $rConPan['id'] . "\",\"0\",\"rural\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-all checkMan'></i></b></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $rConPan['id'] . "\",\"1\",\"rural\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-x checkManWro'></i></b></a>";
                                                  echo "<span id=".$rConPan['id'].">".$status."</span>";
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
<!-- ======================================= 4th menu end ================================= -->

<!-- ======================================= 5th menu start ================================= -->
<div class="tab-pane fade" id="fiveAA" role="tabpanel" aria-labelledby="tab-fiveAA">
      <!-- --------------------------- table section start -------------------------  -->
      <div class="card-body staPag"  >
					<div class="table-responsive">
						<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row">                                        
                           <div class="row"><div class="col-sm-12"><table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
								<thead>
									<tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:3rem;">S.No</th>
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Polling Booth Name</th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:30.4844px;">Action</th>
                                 </tr>                  
							</thead>

                            <tbody>
                                                 <?php foreach($boothName as $pBn => $rPbNa) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $pBn +1 ?></td>
                                                  <td><?php echo $rPbNa['rural'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($rPbNa['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $rPbNa['id'] . "\",\"0\",\"rural\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-all checkMan'></i></b></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $rPbNa['id'] . "\",\"1\",\"rural\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-x checkManWro'></i></b></a>";
                                                  echo "<span id=".$rPbNa['id'].">".$status."</span>";
                                                  ?>&emsp;
                                                  </td>
                                                  </tr>
                                                  <?php } ?>
                                                  </tbody>


                        <!-- ---------------- table body sectioin end --------------------  -->
                                 </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="apiCallbacks_info" role="status" aria-live="polite">Showing 1 to 5 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="apiCallbacks_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="apiCallbacks_previous"><a href="#" aria-controls="apiCallbacks" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="apiCallbacks" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="apiCallbacks_ellipsis"><a href="#" aria-controls="apiCallbacks" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="7" tabindex="0" class="page-link">12</a></li><li class="paginate_button page-item next" id="apiCallbacks_next"><a href="#" aria-controls="apiCallbacks" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
						</div>
				</div>
                <!-- --------------------------- table section end -------------------------  -->													
</div>
</div>


<!-- ======================================= 5th menu end ================================= -->
<!-- ======================================= 6th menu start ================================= -->
<div class="tab-pane fade" id="sixAA" role="tabpanel" aria-labelledby="tab-sixAA">
    
<div class="card-body staPag"  >
					<div class="table-responsive">
						<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row">                                        
                           <div class="row"><div class="col-sm-12">
						   <table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
								<thead>
									<tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:3rem;">S.No</th>
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Polling Booth No</th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                 </tr>                  
							</thead>
								<tbody>
									  <?php foreach($boothNo as $rBn => $rPbNo) { ?> 
									  <tr>
									  <td style="padding-left:3.6rem;"><?php echo $rBn +1 ?></td>
									  <td><?php echo $rPbNo['rural'] ?></td>
									  <td>
									   <?php
									   $status = ($rPbNo['status'] == 1) ?
									  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $rPbNo['id'] . "\",\"0\",\"rural\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-all checkMan'></i></b></a>"
										:
									  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $rPbNo['id'] . "\",\"1\",\"rural\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-x checkManWro'></i></b></a>";
									  echo "<span id=".$rPbNo['id'].">".$status."</span>";
									  ?>&emsp;
									  </td>
									  </tr>
									  <?php } ?>
									  </tbody>


                        <!-- ---------------- table body sectioin end --------------------  -->
                                 </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="apiCallbacks_info" role="status" aria-live="polite">Showing 1 to 5 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="apiCallbacks_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="apiCallbacks_previous"><a href="#" aria-controls="apiCallbacks" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="apiCallbacks" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="apiCallbacks_ellipsis"><a href="#" aria-controls="apiCallbacks" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="7" tabindex="0" class="page-link">12</a></li><li class="paginate_button page-item next" id="apiCallbacks_next"><a href="#" aria-controls="apiCallbacks" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
						</div>
				</div>
	
</div>
<!-- ======================================= 6th menu end ================================= -->

          

											</div>
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
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">
                                                        Create New Location
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
												
                            <!-- -----------  body section start ---------------  -->
                            <div class="container">
                                <div class="row">

											<form action="" id="location_data" method="post"> 
											<div class="col-md-12">
											
											
												 <div class="card-body main">
											        <label for="">Location Type: *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll main1" name="rural_type"  id="rural_type" onChange="return cross_check(this.value)" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                        <option value="1">Add District</option>
                                                        <option value="2">Add Block Office</option>
                                                        <option value="3">Add Constituency</option>
                                                        <option value="4">Add Punchayat Name</option>
                                                        <option value="5">Add Pooling Booth Name</option>
                                                        <option value="6">Add Polling Booth No.</option>
													     </select>
													 </div>
												   </div>
											
											
											<div class="col-md-12" id="district_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add District *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="district" id="district" class="form-control" placeholder="Enter District Name">
                                            </div>
											</div>
											</div>


                                            <div class="card-body" id="district_drp_section" style="display:none;">
										    <label for="">Add District *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-map"></i></span>
										    <select class="form-select busAll" name="district_drp" id="district_drp" onchange="return get_state(this.value)" aria-label="Default select example">
											<option selected="">  Select District *</option>
                                            <?php foreach($distr as $dis) { ?>
                                            <option value="<?php echo $dis['id'] ?>"><?php echo $dis['rural'] ?></option>
                                            <?php } ?>
											</select>
											</div>
										    </div>



                        <div class="col-md-12" id="block_office_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
	                        <div class="card-body pt-2 pb-2">
		                        <label for="">Add Block Office *</label>
			                        <div class="input-group">
				                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                        <input type="text" name="block_office" id="block_office" class="form-control" placeholder="Enter Block Office">
			                        </div>
		                        </div>
                        </div>

                                            <div class="card-body" id="block_drp_section" style="display:none;">
											        <label for=""> Select Block Office *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="block_drp" id="block_drp" onchange="return get_district(this.value)" id="district_drp" aria-label="Default select example">
														<option selected="">  Select Block Office</option>
                                                       <?php foreach($block as $rIblo):?>
                                                        <option value="<?php echo $rIblo['id'] ?>"><?php echo $rIblo['rural'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>




                                            <div class="col-md-12" id="constituency_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Constituency *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="constituency" id="constituency" class="form-control" placeholder="Enter Constituency">
                                            </div>
                                            </div>
											</div>



                                             <div class="card-body" id="constituency_drp_section" style="display:none;">
											        <label for=""> Select Constituency *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="constituency_drp" id="constituency_drp" aria-label="Default select example">
														<option selected="">  Select Constituency </option>
                                                       <?php foreach($constituencyPan as $rVcon):?>
                                                        <option value="<?php echo $rVcon['id'] ?>"><?php echo $rVcon['rural'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>

                                            <div class="col-md-12" id="panchayat_name_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Punchayat Name: *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="panchayat_name" id="panchayat_name" class="form-control" placeholder="Enter Punchayat Name">
                                            </div>
                                             </div>
											 </div>


                                             <div class="card-body" id="panchayat_name_drp_section" style="display:none;">
											        <label for="">Punchayat Name: *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="panchayat_name_drp" id="panchayat_name_drp" aria-label="Default select example">
														<option selected=""> Select Punchayat Name:</option>
                                                       <?php foreach($panchayat as $cRpan):?>
                                                        <option value="<?php echo $cRpan['id'] ?>"><?php echo $cRpan['rural'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>




                                             <div class="col-md-12"  id="booth_name_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Pooling Booth Name *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                             <input type="text" name="booth_name" id="booth_name" class="form-control" placeholder="Enter Pooling Booth Name">
                                             </div>
                                             </div>
											 </div>

                                             <div class="card-body" id="booth_name_drp_section" style="display:none;">
											        <label for=""> Select Pooling Booth Name </label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="booth_name_drp" id="booth_name_drp"  onchange="return get_post(this.value)" aria-label="Default select example">
														<option selected="">  Select Pooling Booth Name</option>
                                                       <?php foreach($boothName as $cRBootN):?>
                                                        <option value="<?php echo $cRBootN['id'] ?>"><?php echo $cRBootN['rural'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>



                                            <div class="col-md-12" id="booth_no_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Pooling Booth No. *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="booth_no" id="booth_no" class="form-control" placeholder="Enter Pooling Booth No.">
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
									</div>
					
								<!-- Card end -->

     <!-- ============================== adding data model section start for view end ============================  -->



	</div>
	<!-- Content wrapper scroll end -->
  <?php $this->load->view('admin/include/footer');?>
	<?php $this->load->view('admin/include/js');?>


  <script>



function cross_check(id) {
          //  alert(id);
            if (id == 1) {
                $("#district_section").show('slow');
                $("#district_drp_section").hide('slow');
                $("#block_office_section").hide('slow');
                $("#block_drp_section").hide('slow');
                $("#constituency_section").hide('slow');
                $("#constituency_drp_section").hide('slow');
                $("#panchayat_name_section").hide('slow');
                $("#panchayat_name_drp_section").hide('slow');
                $("#booth_name_section").hide('slow');
                $("#booth_name_drp_section").hide('slow');
                $("#booth_no_section").hide('slow');
            } else if(id == 2){
                $("#district_section").hide('slow');
                $("#district_drp_section").show('slow');
                $("#block_office_section").show('slow');
                $("#block_drp_section").hide('slow');
                $("#constituency_section").hide('slow');
                $("#constituency_drp_section").hide('slow');
                $("#panchayat_name_section").hide('slow');
                $("#panchayat_name_drp_section").hide('slow');
                $("#booth_name_section").hide('slow');
                $("#booth_name_drp_section").hide('slow');
                $("#booth_no_section").hide('slow');
            } else if(id == 3){
                $("#district_section").hide('slow');
                $("#district_drp_section").show('slow');
                $("#block_office_section").hide('slow');
                $("#block_drp_section").show('slow');
                $("#constituency_section").show('slow');
                $("#constituency_drp_section").hide('slow');
                $("#panchayat_name_section").hide('slow');
                $("#panchayat_name_drp_section").hide('slow');
                $("#booth_name_section").hide('slow');
                $("#booth_name_drp_section").hide('slow');
                $("#booth_no_section").hide('slow');
            } else if(id == 4) {
                $("#district_section").hide('slow');
                $("#district_drp_section").show('slow');
                $("#block_office_section").hide('slow');
                $("#block_drp_section").show('slow');
                $("#constituency_section").hide('slow');
                $("#constituency_drp_section").show('slow');
                $("#panchayat_name_section").show('slow');
                $("#panchayat_name_drp_section").hide('slow');
                $("#booth_name_section").hide('slow');
                $("#booth_name_drp_section").hide('slow');
                $("#booth_no_section").hide('slow');
            } else if(id == 5) {
                $("#district_section").hide('slow');
                $("#district_drp_section").show('slow');
                $("#block_office_section").hide('slow');
                $("#block_drp_section").show('slow');
                $("#constituency_section").hide('slow');
                $("#constituency_drp_section").show('slow');
                $("#panchayat_name_section").hide('slow');
                $("#panchayat_name_drp_section").show('slow');
                $("#booth_name_section").show('slow');
                $("#booth_name_drp_section").hide('slow');
                $("#booth_no_section").hide('slow');
            } else if(id == 6) {
                $("#district_section").hide('slow');
                $("#district_drp_section").show('slow');
                $("#block_office_section").hide('slow');
                $("#block_drp_section").show('slow');
                $("#constituency_section").hide('slow');
                $("#constituency_drp_section").show('slow');
                $("#panchayat_name_section").hide('slow');
                $("#panchayat_name_drp_section").show('slow');
                $("#booth_name_section").hide('slow');
                $("#booth_name_drp_section").show('slow');
                $("#booth_no_section").show('slow');
            }
        }


        $('#location_data').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url : '<?= base_url() ?>admin/Rural/add_rural',
            type : "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType: 'json',
            success: function(data) {
                window.location.reload(true);
               }
            });
        });
  

  

  
  </script>

	</body>


</html>