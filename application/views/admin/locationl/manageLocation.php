<?php // echo "<pre>"; print_r($district); die;?>
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
                    <p style="padding:2rem;"><span style="font-size:2rem;color:#245fae;">Create Location </span><span class="float-end">Home / Create Location</span></p>
                    <p style="margin-top:-2.8rem;"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info float-end"><i class="bi bi-plus-square"></i> Add Location</button>&nbsp;&nbsp;&nbsp;</p>
    

               <section>
               			<div class="card">
									<div class="card-body">
										<div class="custom-tabs-container">
                                        <ul class="nav nav-tabs" id="customTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="bi bi-box-seam"></i>State</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="bi bi-pie-chart"></i>District</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="bi bi-headset"></i>Police Station</a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#fourAA" role="tab" aria-controls="fourAA" aria-selected="false" tabindex="-1"><i class="bi bi-geo-fill"></i>Block Office</a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#fiveAA" role="tab" aria-controls="fiveAA" aria-selected="false" tabindex="-1"><i class="bi bi-joystick"></i>Post Office</a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-sixAA" data-bs-toggle="tab" href="#sixAA" role="tab" aria-controls="sixAA" aria-selected="false" tabindex="-1"><i class="bi bi-journals"></i>Pin Code</a>
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">State</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>  
                                            </tr>                  
											</thead>

                                               <tbody>
                            <?php foreach($district as $d => $disD) { ?> 
                                <tr>
                                    <td style="padding-left:3.6rem;"><?php echo $d +1 ?></td>
                                    <td><?php echo $disD['location'] ?></td>
                                    <td>

                                         <?php
                                        $status = ($disD['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $disD['id'] . "\",\"0\",\"location\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green aaa'>Active</span></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $disD['id'] . "\",\"1\",\"location\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Deactive</span></a>";
                                        echo "<span id=".$disD['id'].">".$status."</span>";
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">District Name</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>
                                                <tbody>
                            <?php foreach($district as $d => $dis) { ?> 
                                <tr>
                                    <td style="padding-left:3.6rem;"><?php echo $d +1 ?></td>
                                    <td><?php echo $dis['location'] ?></td>
                                    <td>

                                         <?php
                                        $status = ($dis['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $dis['id'] . "\",\"0\",\"location\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $dis['id'] . "\",\"1\",\"location\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
                                        echo "<span id=".$dis['id'].">".$status."</span>";
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Police Station</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>

                                                <tbody>
                                                 <?php foreach($police as $p => $poi) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $p +1 ?></td>
                                                  <td><?php echo $poi['location'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($poi['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $poi['id'] . "\",\"0\",\"location\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $poi['id'] . "\",\"1\",\"location\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
                                                  echo "<span id=".$poi['id'].">".$status."</span>";
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Block Offie</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>
                                                
                                                <tbody>
                                                 <?php foreach($block as $b => $blo) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $b +1 ?></td>
                                                  <td><?php echo $blo['location'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($blo['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $blo['id'] . "\",\"0\",\"location\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $blo['id'] . "\",\"1\",\"location\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
                                                  echo "<span id=".$blo['id'].">".$status."</span>";
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
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Post Office</th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                 </tr>                  
							</thead>

                            <tbody>
                                                 <?php foreach($post as $po => $pos) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $po +1 ?></td>
                                                  <td><?php echo $pos['location'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($pos['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $pos['id'] . "\",\"0\",\"location\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $pos['id'] . "\",\"1\",\"location\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
                                                  echo "<span id=".$pos['id'].">".$status."</span>";
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
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Pin Code</th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                 </tr>                  
							</thead>
								<tbody>
									  <?php foreach($pin as $pi => $pi_n) { ?> 
									  <tr>
									  <td style="padding-left:3.6rem;"><?php echo $pi +1 ?></td>
									  <td><?php echo $pi_n['location'] ?></td>
									  <td>
									   <?php
									   $status = ($pi_n['status'] == 1) ?
									  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $pi_n['id'] . "\",\"0\",\"location\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
										:
									  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $pi_n['id'] . "\",\"1\",\"location\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
									  echo "<span id=".$pi_n['id'].">".$status."</span>";
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
													<select class="form-select busAll main1" name="location_type"  id="location_type" onChange="return cross_check(this.value)" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                        <option value="1">Add State</option>
                                                        <option value="2">Add District</option>
                                                        <option value="3">Add Police Station</option>
                                                        <option value="4">Add Block Office</option>
                                                        <option value="5">Add Post Office</option>
                                                        <option value="6">Add Pin Code</option>
													     </select>
													 </div>
												   </div>
											
											
											<div class="col-md-12" id="state_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add State:  *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="state" id="state" class="form-control" placeholder="Enter State Name">
											</div>
											</div>
											</div>


                                               <div class="card-body" id="state_drp_section" style="display:none;">
											        <label for="">Add State *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="state_drp" id="state_drp" onchange="return get_state(this.value)" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                       <?php foreach($statedata as $sta):?>
                                                        <option value="<?php echo $sta['id'] ?>"><?php echo $sta['location'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>



                        <div class="col-md-12" id="district_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
	                        <div class="card-body pt-2 pb-2">
		                        <label for="">Add District: *</label>
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
													<select class="form-select busAll" name="district_drp" onchange="return get_district(this.value)" id="district_drp" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                       <?php foreach($district as $dist):?>
                                                        <option value="<?php echo $dist['id'] ?>"><?php echo $dist['location'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>




                                            <div class="col-md-12" id="police_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Police Station *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                           <input type="text" name="police_station" id="police_station" class="form-control" placeholder="Enter Polic Station Name">
                                            </div>
                                             </div>
											</div>
                                             <div class="card-body" id="police_drp_section" style="display:none;">
											        <label for="">Add Police Station *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="police_drp" id="police_drp" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                       <?php foreach($police as $polData):?>
                                                        <option value="<?php echo $polData['id'] ?>"><?php echo $polData['location'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>

                                            <div class="col-md-12" id="block_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Block Office *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="block_office" id="block_office" class="form-control" placeholder="Enter Polic Station Name">
                                            </div>
                                             </div>
											 </div>

                                             <div class="col-md-12"  id="post_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Post Office *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="post_office" id="post_office" class="form-control" placeholder="Enter Post Office Name">
                                             </div>
                                             </div>
											 </div>

                                             <div class="card-body" id="post_drp_section" style="display:none;">
											        <label for="">Post Office: </label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll" name="post_drp" id="post_drp"  onchange="return get_post(this.value)" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                       <?php foreach($post as $postData):?>
                                                        <option value="<?php echo $postData['id'] ?>"><?php echo $postData['location'] ?></option>
                                                        <?php endforeach; ?>
													     </select>
													 </div>
												   </div>
                                           

                                            <div class="col-md-12" id="pin_code_section" style="margin-top:-0.3rem;margin-bottom:1rem;display:none;">
											<div class="card-body pt-4">
											<label for="">Add Pin Code *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="pin_code" id="pin_code" class="form-control" placeholder="Enter Pin Code Name">
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


     <!-- ====================================  view section start ===================================  -->
     

                  <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
										<!-- Modal -->
										<div class="modal fade" id="viewSectorData" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header" style="border-top:6px solid #245fae;">
														<h5 class="modal-title" id="exampleModalLabel">
                                                        Industeries Details
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
												 <form action="" method="post" id="updateDetails">
                         <div class="modal-header" style="border-top:6px solid #245fae;">
														<h5 class="modal-title" id="exampleModalLabel">
														Update Industeries Data
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body" >
                            <div class="container">
                              <div class="row" id="editSecdetails"></div>
                            </div>
                          </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
															Close
														</button>
														<button type="submit" class="btn btn-primary">
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



        function cross_check(id) {
          //  alert(id);
            if (id == 1) {
                $("#state_section").show('slow');
                $("#state_drp_section").hide('slow');
                $("#district_section").hide('slow');
                $("#district_drp_section").hide('slow');
                $("#police_section").hide('slow');
                $("#police_drp_section").hide('slow');
                $("#block_section").hide('slow');
                $("#block_drp_section").hide('slow');
                $("#post_section").hide('slow');
                $("#post_drp_section").hide('slow');
                $("#pin_code_section").hide('slow');
            } else if(id == 2){
                $("#state_section").hide('slow');
                $("#state_drp_section").show('slow');  
                $("#district_section").show('slow');
                $("#district_drp_section").hide('slow');
                $("#police_section").hide('slow');
                $("#police_drp_section").hide('slow');
                $("#block_section").hide('slow');
                $("#block_drp_section").hide('slow');
                $("#post_section").hide('slow');
                $("#post_drp_section").hide('slow');
                $("#pin_code_section").hide('slow');
            } else if(id == 3){
                $("#state_drp_section").show('slow');
                $("#district_drp_section").show('slow');
                $("#police_section").show('slow');
                $("#district_section").hide('slow');
                $("#police_drp_section").hide('slow');
                $("#block_section").hide('slow');
                $("#block_drp_section").hide('slow');
                $("#post_section").hide('slow');
                $("#post_drp_section").hide('slow');
                $("#pin_code_section").hide('slow');
            } else if(id == 4) {
                $("#state_drp_section").show('slow');
                $("#district_drp_section").show('slow');
                $("#block_section").show('slow');
                $("#state_section").hide('slow');
                $("#district_section").hide('slow');
                $("#police_section").hide('slow');
                $("#police_drp_section").hide('slow');
                $("#block_drp_section").hide('slow');
                $("#post_section").hide('slow');
                $("#post_drp_section").hide('slow');
                $("#pin_code_section").hide('slow');
            } else if(id == 5) {
                $("#state_section").hide('slow');
                $("#state_drp_section").show('slow');
                $("#district_section").hide('slow');
                $("#district_drp_section").show('slow');
                $("#police_section").hide('slow');
                $("#police_drp_section").hide('slow');
                $("#block_section").hide('slow');
                $("#block_drp_section").hide('slow');
                $("#post_section").show('slow');
                $("#post_drp_section").hide('slow');
                $("#pin_code_section").hide('slow');
            } else if(id == 6) {
                $("#state_section").hide('slow');
                $("#state_drp_section").show('slow');
                $("#district_section").hide('slow');
                $("#district_drp_section").show('slow');
                $("#police_section").hide('slow');
                $("#police_drp_section").hide('slow');
                $("#block_section").hide('slow');
                $("#block_drp_section").hide('slow');
                $("#post_section").hide('slow');
                $("#post_drp_section").show('slow');
                $("#pin_code_section").show('slow');
            }
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