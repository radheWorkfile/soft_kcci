
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

				<li class="sidebar-dropdown" style="display:none;">
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

<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});

</script>
