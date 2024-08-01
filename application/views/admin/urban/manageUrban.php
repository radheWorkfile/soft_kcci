<?php // echo "<pre>";print_r($state); die;?>
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
        .lefman{margin-left:1.2rem;}
		.manSpa{display:none;}
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
                    <p style="padding:2rem;"><span style="font-size:2rem;color:#245fae;">Create New Urban </span><span class="float-end">Home / Create New Urban</span></p>
                    <p style="margin-top:-2.8rem;"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info float-end"><i class="bi bi-plus-square"></i>Create New Urban</button>&nbsp;&nbsp;&nbsp;</p>
    

               <section>
               			<div class="card">
									<div class="card-body">
										<div class="custom-tabs-container">
                                        <ul class="nav nav-tabs" id="customTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab" aria-controls="oneAA" aria-selected="true"><i class="bi bi-box-seam"></i>District</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab" aria-controls="twoAA" aria-selected="false" tabindex="-1"><i class="bi bi-pie-chart"></i>Assembly Constitution</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab" aria-controls="threeAA" aria-selected="false" tabindex="-1"><i class="bi bi-headset"></i>Muncipal Corporation</a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#fourAA" role="tab" aria-controls="fourAA" aria-selected="false" tabindex="-1"><i class="bi bi-geo-fill"></i>Ward Councillors Name</a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#fiveAA" role="tab" aria-controls="fiveAA" aria-selected="false" tabindex="-1"><i class="bi bi-joystick"></i>Ward No</a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link lefman" id="tab-sixAA" data-bs-toggle="tab" href="#sixAA" role="tab" aria-controls="sixAA" aria-selected="false" tabindex="-1"><i class="bi bi-house-fill"></i>House No</a>
												</li>
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-sixAA" data-bs-toggle="tab" href="#SevenAA" role="tab" aria-controls="SevenAA" aria-selected="false" tabindex="-1"><i class="bi bi-battery-charging"></i>Polling Booth No</a>
												</li>
                                              
                                                <li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-sixAA" data-bs-toggle="tab" href="#eightAA" role="tab" aria-controls="eightAA" aria-selected="false" tabindex="-1"><i class="bi bi-lightning-charge-fill"></i>Polling Booth Name</a>
												</li>
											</ul>
											<div class="tab-content" id="customTabContent3">
												<div class="tab-pane fade active show" id="oneAA" role="tabpanel" aria-labelledby="tab-oneAA">
													<div class="row gx-3">
                                                        <!-- ============================================================ 1st menu start ============================= -->
                                                        <div class="col-md-12" id="1st">
                <!-- --------------------------- table section start -------------------------  -->
                 <div class="card-body staPag">
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
                            <?php foreach($districtData as $d => $disUrDa) { ?> 
                                <tr>
                                    <td style="padding-left:3.6rem;"><?php echo $d +1 ?></td>
                                    <td><?php echo $disUrDa['urban'] ?></td>
                                    <td>

                                         <?php
                                        $status = ($disUrDa['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $disUrDa['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green'>Success</span></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $disUrDa['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Painding</span></a>";
                                        echo "<span id=".$disUrDa['id'].">".$status."</span>";
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Assembly Constitution </th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>
                                                <tbody>
                            <?php foreach($assembly as $as => $assEm) { ?> 
                                <tr>
                                    <td style="padding-left:3.6rem;"><?php echo $d +1 ?></td>
                                    <td><?php echo $assEm['urban'] ?></td>
                                    <td>

                                         <?php
                                        $status = ($assEm['status'] == 1) ?
                                            "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $assEm['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green'>Success</span></a>"
                                            
                                            :
                                            "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $assEm['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Painding</span></a>";
                                        echo "<span id=".$assEm['id'].">".$status."</span>";
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Muncipal Corporation</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>

                                                <tbody>
                                                 <?php foreach($muncipal as $m => $munCi) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $m +1 ?></td>
                                                  <td><?php echo $munCi['urban'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($munCi['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $munCi['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green'>Success</span></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $munCi['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Painding</span></a>";
                                                  echo "<span id=".$munCi['id'].">".$status."</span>";
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
                                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Ward Councillors Name</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                             <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                            </tr>                  
												</thead>
                                                
                                                <tbody>
                                                 <?php foreach($wardc as $w => $warDc) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $w +1 ?></td>
                                                  <td><?php echo $warDc['urban'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($warDc['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $warDc['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green'>Success</span></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $warDc['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Painding</span></a>";
                                                  echo "<span id=".$warDc['id'].">".$status."</span>";
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
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Ward No</th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                 </tr>                  
							</thead>

                            <tbody>
                                                 <?php foreach($wardn as $w => $war) { ?> 
                                                  <tr>
                                                  <td style="padding-left:3.6rem;"><?php echo $w +1 ?></td>
                                                  <td><?php echo $war['urban'] ?></td>
                                                  <td>
                                                   <?php
                                                   $status = ($war['status'] == 1) ?
                                                  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $war['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green'>Success</span></a>"
                                                    :
                                                  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $war['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Painding</span></a>";
                                                  echo "<span id=".$war['id'].">".$status."</span>";
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
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">House No </th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                 </tr>                  
							</thead>
								<tbody>
									  <?php foreach($housen as $ho => $hoNo) { ?> 
									  <tr>
									  <td style="padding-left:3.6rem;"><?php echo $ho +1 ?></td>
									  <td><?php echo $hoNo['urban'] ?></td>
									  <td>
									   <?php
									   $status = ($hoNo['status'] == 1) ?
									  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $hoNo['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
										:
									  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $hoNo['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
									  echo "<span id=".$hoNo['id'].">".$status."</span>";
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
</div>
<!-- ======================================= 6th menu end ================================= -->
<!-- ======================================= 7th menu start ================================= -->
<div class="tab-pane fade" id="SevenAA" role="tabpanel" aria-labelledby="tab-SevenAA">
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
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;padding-left:4rem;">Action</th>
                                 </tr>                  
							</thead>
								<tbody>
									  <?php foreach($boothn as $bo => $booT) { ?> 
									  <tr>
									  <td style="padding-left:3.6rem;"><?php echo $bo +1 ?></td>
									  <td><?php echo $booT['urban'] ?></td>
									  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									   <?php
									   $status = ($booT['status'] == 1) ?
									  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $booT['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
										:
									  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $booT['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
									  echo "<span id=".$booT['id'].">".$status."</span>";
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
</div>
<!-- ======================================= 7th menu end ================================= -->
<!-- ======================================= 8th menu start ================================= -->
<div class="tab-pane fade" id="eightAA" role="tabpanel" aria-labelledby="tab-eightAA">
<div class="card-body staPag"  >
					<div class="table-responsive">
						<div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row">                                        
                           <div class="row"><div class="col-sm-12">
						   <table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
								<thead>
									<tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:3rem;">S.No</th>
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:66.453px;">Polling Booth Name</th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:109.453px;">Industeries Name</th> -->
                                    <!-- <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:109.453px;">Description</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:50.4844px;">Action</th>
                                 </tr>                  
							</thead>
								<tbody>
									  <?php foreach($boothna as $bI => $bT) { ?> 
									  <tr>
									  <td style="padding-left:3.6rem;"><?php echo $bI +1 ?></td>
									  <td><?php echo $bT['urban'] ?></td>
									  <td>
									   <?php
									   $status = ($bT['status'] == 1) ?
									  "<a class='' href='javascript:void()' onClick='return changeStatus(\"" . $bT['id'] . "\",\"0\",\"urban\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><b><i class='bi bi-check-square'></i> </b></a>"
										:
									  "<a class='' href='javascript:void()'  onClick='return changeStatus(\"" . $bT['id'] . "\",\"1\",\"urban\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><b><i class='bi bi-calendar2-x'></i> </b></a>";
									  echo "<span id=".$bT['id'].">".$status."</span>";
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
    </div>
<!-- ======================================= 8th menu end ================================= -->



          

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
                                                        Create New Urban
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
												
                            <!-- -----------  body section start ---------------  -->
                            <div class="container">
                                <div class="row">

											<form action="" id="urban_data" method="post"> 
											<div class="col-md-12">
											
											
												 <div class="card-body main">
											        <label for="">Location Type: *</label>
												   <div class="input-group">
												   <span class="input-group-text"><i class="bi bi-map"></i></span>
													<select class="form-select busAll main1" name="urban_type"  id="urban_type" onChange="return cross_check()" aria-label="Default select example">
														<option selected="">--- Select One ---</option>
                                                        <option value="1">Add District</option>
                                                        <option value="2">Add Assembly Constitution</option>
                                                        <option value="3">Add Muncipal Corporation</option>
                                                        <option value="4">Add Ward Councillors Name</option>
                                                        <option value="5">Add Ward No.</option>
                                                        <option value="6">Add House No.</option>
                                                        <option value="7">Add Polling Booth Name</option>
                                                        <option value="8">Add Polling Booth No.</option>
													     </select>
													 </div>
												   </div>
											
											
											<div class="col-md-12 manSpa" id="district_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add district:  *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="district" id="district" class="form-control" placeholder="Enter District Name">
                                            </div>
											</div>
											</div>


                                            <div class="card-body manSpa" id="district_drp">
										    <label for="">district *</label>
										    <div class="input-group">
											<span class="input-group-text"><i class="bi bi-map"></i></span>
											<select class="form-select busAll" name="state_drp" id="state_drp" onchange="return get_state(this.value)" aria-label="Default select example">
										    <option selected="">  Select district</option>
                                            <?php foreach($districtData as $dis_D) { ?>
                                            <option value="<?php echo $dis_D['id'] ?>"><?php echo $dis_D['urban'] ?></option>
                                            <?php } ?>
											</select>
											</div>
											</div>


                                            <div class="col-md-12 manSpa" id="assembly_constitution_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Assembly Constitution *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="assembly_constitution" id="assembly_constitution" class="form-control" placeholder="Enter Assembly Constitution Name">
                                            </div>
											</div>
											</div>


                                            <div class="card-body manSpa" id="assembly_drp_section">
											<label for="">Assembly Constitution *</label>
											<div class="input-group">
										    <span class="input-group-text"><i class="bi bi-map"></i></span>
											<select class="form-select busAll" name="assembly_drp" id="assembly_drp" onchange="return get_assembly(this.value)" aria-label="Default select example">
											<option selected="">  Select Assembly Constitution </option>
                                            <?php foreach($assembly as $assM) { ?>
                                            <option value="<?php echo $assM['id'] ?>"><?php echo $assM['urban'] ?></option>
                                            <?php } ?>
											</select>
										    </div>
											</div>


                                            <div class="col-md-12 manSpa" id="muncipal_corporation_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Muncipal Corporation: *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="muncipal_corporation" id="muncipal_corporation" class="form-control" placeholder="Enter Assembly Constitution Name">
                                            </div>
											</div>
											</div>


                                            <div class="card-body  manSpa" id="muncipal_drp_section">
											<label for="">Muncipal Corporation *</label>
											<div class="input-group">
										    <span class="input-group-text"><i class="bi bi-map"></i></span>
											<select class="form-select busAll" name="muncipal_drp" id="muncipal_drp" onchange="return get_muncipal(this.value)" aria-label="Default select example">
											<option selected="">  Select Muncipal Corporation </option>
                                            <?php foreach($muncipal as $munCi_D) { ?>
                                            <option value="<?php echo $munCi_D['id'] ?>"><?php echo $munCi_D['urban'] ?></option>
                                            <?php } ?>
											</select>
										    </div>
											</div>

                                            <div class="col-md-12 manSpa" id="ward_cons_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Ward Councillors Name: *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="ward_cons_nam" id="ward_cons_nam" class="form-control" placeholder="Enter Ward Councillors Name">
                                            </div>
											</div>
											</div>

                                            <div class="card-body manSpa" id="ward_cons_nam_drp_section">
											<label for="">Ward Councillors Name: *</label>
											<div class="input-group">
										    <span class="input-group-text"><i class="bi bi-map"></i></span>
											<select class="form-select busAll" name="ward_cons_nam_drp" id="ward_cons_nam_drp" onchange="return get_wrd_cnslr(this.value)" aria-label="Default select example">
											<option selected="">  Select Ward Councillors Name  </option>
                                            <?php foreach($wardc as $warC_D) { ?>
                                            <option value="<?php echo $warC_D['id'] ?>"><?php echo $warC_D['urban'] ?></option>
                                            <?php } ?>
											</select>
										    </div>
											</div>

                                            <div class="col-md-12 manSpa" id="ward_no_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Ward No *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="ward_no" id="ward_no" class="form-control" placeholder="Enter Ward Councillors Name">
                                            </div>
											</div>
											</div>

                                            <div class="card-body manSpa" id="ward_cons_no_drp_section">
											<label for="">Ward No. *</label>
											<div class="input-group">
										    <span class="input-group-text"><i class="bi bi-map"></i></span>
											<select class="form-select busAll" name="ward_no_drp" id="ward_no_drp" onchange="return get_wrd_no(this.value)" aria-label="Default select example">
											<option selected="">  Select Ward No </option>
                                            <?php foreach($wardn as $warD_N) { ?>
                                            <option value="<?php echo $warD_N['id'] ?>"><?php echo $warD_N['urban'] ?></option>
                                            <?php } ?>
											</select>
										    </div>
											</div>

                                            <div class="col-md-12 manSpa" id="house_no_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add House No *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="house_no" id="house_no" class="form-control" placeholder="Enter Ward Councillors Name">
                                            </div>
											</div>
											</div>


                                            <div class="card-body manSpa" id="house_no_drp_section">
											<label for="">House No. *</label>
											<div class="input-group">
										    <span class="input-group-text"><i class="bi bi-map"></i></span>
											<select class="form-select busAll" name="house_no_drp" id="house_no_drp" onchange="return get_house_no(this.value)" aria-label="Default select example">
											<option selected="">  Select House No </option>
                                            <?php foreach($housen as $hoUseNo) { ?>
                                            <option value="<?php echo $hoUseNo['id'] ?>"><?php echo $hoUseNo['urban'] ?></option>
                                            <?php } ?>
											</select>
										    </div>
											</div>


											<div class="col-md-12 manSpa" id="booth_name_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Polling Booth Name *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="booth_name" id="booth_name" class="form-control" placeholder="Enter Ward Councillors Name">
                                            </div>
											</div>
											</div>

											<div class="card-body manSpa" id="booth_name_drp_section">
											<label for="">Polling Booth Name  *</label>
											<div class="input-group">
										    <span class="input-group-text"><i class="bi bi-map"></i></span>
											<select class="form-select busAll" name="booth_name_drp" id="booth_name_drp" onchange="return get_booth_no(this.value)" aria-label="Default select example">
											<option selected="">  Select Polling Booth Name </option>
                                            <?php foreach($boothn as $boOhN) { ?>
                                            <option value="<?php echo $boOhN['id'] ?>"><?php echo $boOhN['urban'] ?></option>
                                            <?php } ?>
											</select>
										    </div>
											</div>


											<div class="col-md-12 manSpa" id="booth_name_section">
											<div class="card-body pt-2 pb-2">
											<label for="">Add Polling Booth No. *</label>
											<div class="input-group">
											<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="booth_no" id="booth_no" class="form-control" placeholder="Enter Ward Councillors Name">
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


function cross_check() {
		 let id=$('#urban_type').val();
	    //  alert(id);
		  if (id == 1) {
		 $("#district_section").show();
	      $("#district_drp").hide();
	      $("#assembly_constitution_section").hide();
	      $("#assembly_drp_section").hide();
	      $("#muncipal_corporation_section").hide();
	      $("#muncipal_drp_section").hide();
	      $("#ward_cons_section").hide();
	      $("#ward_cons_nam_drp_section").hide();
	      $("#ward_no_section").hide();
	      $("#ward_cons_no_drp_section").hide();
	      $("#house_no_section").hide();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").hide();
	      $("#booth_name_drp_section").hide();
			}else if(id == 2){
		  $("#district_section").hide();
	      $("#district_drp").show();
	      $("#assembly_constitution_section").show();
	      $("#assembly_drp_section").hide();
	      $("#muncipal_corporation_section").hide();
	      $("#muncipal_drp_section").hide();
	      $("#ward_cons_section").hide();
	      $("#ward_cons_nam_drp_section").hide();
	      $("#ward_no_section").hide();
	      $("#ward_cons_no_drp_section").hide();
	      $("#house_no_section").hide();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").hide();
	      $("#booth_name_drp_section").hide();
			}else if(id == 3){
				$("#district_section").hide();
	      $("#district_drp").show();
	      $("#assembly_constitution_section").hide();
	      $("#assembly_drp_section").hide();
	      $("#muncipal_corporation_section").show();
	      $("#muncipal_drp_section").hide();
	      $("#ward_cons_section").hide();
	      $("#ward_cons_nam_drp_section").hide();
	      $("#ward_no_section").hide();
	      $("#ward_cons_no_drp_section").hide();
	      $("#house_no_section").hide();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").hide();
	      $("#booth_name_drp_section").hide();
            }else if(id == 4){
		$("#district_drp").show();
	      $("#assembly_constitution_section").hide();
	      $("#assembly_drp_section").hide();
	      $("#muncipal_corporation_section").hide();
	      $("#muncipal_drp_section").show();
	      $("#ward_cons_section").show();
	      $("#ward_cons_nam_drp_section").hide();
	      $("#ward_no_section").hide();
	      $("#ward_cons_no_drp_section").hide();
	      $("#house_no_section").hide();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").hide();
	      $("#booth_name_drp_section").hide();
		}else if(id == 5){
		$("#district_drp").show();
	      $("#assembly_constitution_section").hide();
	      $("#assembly_drp_section").hide();
	      $("#muncipal_corporation_section").hide();
	      $("#muncipal_drp_section").show();
	      $("#ward_cons_section").hide();
	      $("#ward_cons_nam_drp_section").show();
	      $("#ward_no_section").show();
	      $("#ward_cons_no_drp_section").hide();
	      $("#house_no_section").hide();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").hide();
	      $("#booth_name_drp_section").hide();
		}else if(id == 6){
		  $("#district_drp").show();
	      $("#assembly_constitution_section").hide();
	      $("#assembly_drp_section").hide();
	      $("#muncipal_corporation_section").hide();
	      $("#muncipal_drp_section").show();
	      $("#ward_cons_section").hide();
	      $("#ward_cons_nam_drp_section").show();
	      $("#ward_cons_no_drp_section").show();
	      $("#ward_no_section").hide();
	      $("#house_no_section").show();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").hide();
	      $("#booth_name_drp_section").hide();
		}else if(id == 7){
		  $("#district_drp").show();
	      $("#assembly_constitution_section").hide();
	      $("#assembly_drp_section").show();
	      $("#muncipal_corporation_section").hide();
	      $("#muncipal_drp_section").hide();
	      $("#ward_cons_section").hide();
	      $("#ward_cons_nam_drp_section").hide();
	      $("#ward_cons_no_drp_section").hide();
	      $("#ward_no_section").hide();
	      $("#house_no_section").hide();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").show();
	      $("#booth_name_drp_section").hide();
		}else if(id == 8){
		  $("#district_drp").show();
	      $("#assembly_constitution_section").hide();
	      $("#assembly_drp_section").show();
	      $("#muncipal_corporation_section").hide();
	      $("#muncipal_drp_section").hide();
	      $("#ward_cons_section").hide();
	      $("#ward_cons_nam_drp_section").hide();
	      $("#ward_cons_no_drp_section").hide();
	      $("#ward_no_section").hide();
	      $("#house_no_section").hide();
	      $("#house_no_drp_section").hide();
	      $("#booth_name_section").hide();
	      $("#booth_name_drp_section").show();
         }
	  }

	  function get_munciple(id){ 
            $.ajax({
                url : '<?= base_url() ?>admin/Urban/get_muncipal',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#muncipal_drp').empty();
                    $('#muncipal_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#muncipal_drp').append('<option value="' + item.id + '">' + item.urban + '</option>')
                    });
                }
            });

            $.ajax({
                url : '<?= base_url() ?>admin/Urban/get_assembly',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#assembly_drp').empty();
                    $('#assembly_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#assembly_drp').append('<option value="' + item.id + '">' + item.urban + '</option>')
                    });
                }
            });
        }

        function get_polling_name(id){ 
            $.ajax({
                url : '<?= base_url() ?>admin/Urban/get_booth_name',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#booth_name_drp').empty();
                    $('#booth_name_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#booth_name_drp').append('<option value="' + item.id + '">' + item.urban + '</option>')
                    });
                }
            });
        }

        function get_wrd_cnslr(id){ 
            $.ajax({
                url : '<?= base_url() ?>admin/Urban/get_wrd_cnslr',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#ward_cons_nam_drp').empty();
                    $('#ward_cons_nam_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#ward_cons_nam_drp').append('<option value="' + item.id + '">' + item.urban + '</option>')
                    });
                }
            });
        }

        function get_wrd_no(id){
            $.ajax({
                url : '<?= base_url() ?>admin/Urban/get_wrd_no',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#ward_no_drp').empty();
                    $('#ward_no_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#ward_no_drp').append('<option value="' + item.id + '">' + item.urban + '</option>')
                    });
                }
            });
        }

        function get_house_no(id){
            $.ajax({
                url : '<?= base_url() ?>admin/Urban/get_house_no',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#house_no_drp').empty();
                    $('#house_no_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#house_no_drp').append('<option value="' + item.id + '">' + item.urban + '</option>')
                    });
                }
            });
        }

        function get_booth_name(id){
            $.ajax({
                url : '<?= base_url() ?>admin/Urban/get_booth_name',
                type : "POST",
                data: {'id':id},
                dataType: 'json',
                success: function(data) {
                    $('#booth_name_drp').empty();
                    $('#booth_name_drp').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#booth_name_drp').append('<option value="' + item.id + '">' + item.urban + '</option>')
                    });
                }
            });
        }
    

	  $('#urban_data').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url : '<?= base_url() ?>admin/Urban/add_urban',
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
                }
				// window.location.reload(true);
            }
        });
        });


  
  </script>

	</body>


</html>