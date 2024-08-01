
<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">
<!-- Sidebar menu starts -->
        <div class="sidebar-menu">
			<div class="sidebarMenuScroll">
				<ul>

					<li class="active-page-link">
				    <a href="<?php echo base_url();?>Login/index">
					<i class="bi bi-house"></i>
					<span class="menu-text">Dashboard</span>
					</a>
					</li>


					

					         <li class="sidebar-dropdown">
									<a href="#">
									<i class="bi bi-gear"></i>
										<span class="menu-text">Setting</span>
										<span class="badge red">1</span>
									</a>
									<div class="sidebar-submenu bo">
										<ul>
											<li>
												<a href="<?php echo base_url('admin/Setting/manageSetting');?>">- Admin Setting</a>
											</li>
										</ul>
									</div>
								</li>


								<li class="sidebar-dropdown">
									<a href="#">
									<i class="bi bi-person-lines-fill"></i>
										<span class="menu-text">Category</span>
										<span class="badge red">9</span>
									</a>
									<div class="sidebar-submenu bo">
										<ul>
											<li>
												<a href="<?php echo base_url('admin/Category/manCategory');?>">- Create Sector </a>
											</li>
											<li>
												<a href="<?php echo base_url('admin/BusinessType/manageBusType');?>">- Create Business Type </a>
											</li>
											<li>
												<a href="<?php echo base_url('admin/Industeries/manIndus');?>">- Create Industeries </a>
											</li>
											<li>
												<a href="<?php echo base_url('admin/Location/manageLocation');?>">- Create Location </a>
											</li>
											<li>
												<a href="<?php echo base_url('admin/Caste/manageCaste');?>">- Create Caste </a>
											</li>
											<li>
												<a href="<?php echo base_url('admin/Urban/manageUrban');?>">- Create Urban </a>
											</li>
											<li>
												<a href="<?php echo base_url('admin/Rural/manageRural');?>">- Create Rural </a>
											</li>
										
											<li>
												<a href="<?php echo base_url('admin/Advertisement/manageAdver');?>">- Create Advertisement </a>
											</li>
										</ul>
									</div>
								</li>

								
                    <li>
						<a href="<?php echo base_url('admin/addFounderMember/manageFouMem');?>">
						<i class="bi bi-box"></i>
						<span class="menu-text">Add Founder Member</span>
						</a>
						
					</li>
					<li>
						<a href="<?php echo base_url('admin/addMentor/manageMentor');?>">
						<i class="bi bi-upc-scan"></i>
						<span class="menu-text">Add Mentor Member</span>
						</a>
						
					</li>
					<li>
						<a href="<?php echo base_url('admin/LatestNews/manageNews');?>">
						<i class="bi bi-collection"></i>
						<span class="menu-text">Add Letest News</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('admin/Tender/manTender');?>">
						<i class="bi bi-person-video2"></i>
						<span class="menu-text">Add Letest Tender</span>
						</a>
					</li>

					
					<li class="sidebar-dropdown">
									<a href="#">
									<i class="bi bi-people"></i>
										<span class="menu-text">Register</span>
										<span class="badge red">1</span>
									</a>
									<div class="sidebar-submenu bo">
										<ul>
											<li>
												<a href="<?php echo base_url('admin/Register/add_register');?>">- Add Register </a>
											</li>
											<li>
												<a href="<?php echo base_url('admin/Register/manRegister');?>">- Manage Register </a>
											</li>
										</ul>
									</div>
								</li>




				</ul>
					</div>
					</div>
<!-- Sidebar menu ends -->
</nav>
<!-- Sidebar wrapper end -->


