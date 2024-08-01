

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

	<?php $this->load->view('founder/include/css');?>
	<style>
		.texCol{color:#123456;font-weight:800;}
		.mainDiv{animation: mymove 5s infinite;}
         @keyframes mymove {50% {box-shadow: 2px 2px 10px #0f50ad;}}
		 .editBtn { color: blue;border: 2px solid blue;border-radius: 5px; padding: 0.3rem 0.5rem;}
         .texLef{padding-left:3rem;color:#123456;font-weight:800;}.texRig{padding-left:10rem;color:red;}
		 .texRig1{padding-left:4rem;}
		 .texRigView{padding-left:8rem;}
		 .memImgMan{height:10rem;border:2px solid #0f50ad;border-radius:1rem;border-top:8px solid #123456;}
		 .memVerNa1st{width:35%;display:inline-block;color:#0f50ad;font-weight:800;}
		 .memVerNa2nd{width:62%;display:inline-block;color:green;font-weight:500;}
		 .imgManD{height:5rem;border:2px solid #123456;border-top:6px solid #123456;padding-top:0.3rem;}
		 .imgManDVer{height:5rem;border:2px solid #123456;border-top:6px solid #123456;padding-top:0.3rem;margin-top:0.8rem;}
		 .font-col{color:#123456;}

	</style>


	</head>

	<body>
		<?php $this->load->view('member/include/left');?>
	<?php $this->load->view('member/include/header');?>

        <!-- Content wrapper scroll start -->
		<div class="content-wrapper-scroll">



<!-- ============================================ Main Area Start ================================   -->
<?php if($regisDatas):?>



<section>
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="padding:1.5rem;">
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
		    </div>  

			<div class="col-md-6 mt-4 manDiv" style="padding:0.4rem;">
			<div class="" style="background-color:#ffffff;padding:2rem;margin-top:0rem;">
			<h4 style="margin-top:-1rem;padding-left:1.8rem;font-size:1rem;">&nbsp;&nbsp;<i class="bi bi-x"style="color:red;font-size:1.2rem;"></i>Not Verified Member  </h4>
			<h4 style="margin-bottom:4rem;padding-left:2.6rem;">Guest Information <span><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="float-end imgManD"></span></h4>
            <div class="mt-5">
				<p><span class="texLef">Name</span><span class="texRig"><?php echo $regisDatas['name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Father Name</span><span style="padding-left:6.5rem;"><?php echo $regisDatas['father_name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Mobiel Number</span><span style="padding-left:5rem;"><?php echo $regisDatas['mobile'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Email</span><span class="texRig"><?php echo $regisDatas['email'];?></span></p>
				</div>
                <div class="mt-4 mb-2">
				<button type="button" class="btn btn-primary float-end"  data-bs-toggle="modal" data-bs-target="#viewGuestModel"><i class="bi bi-printer"></i>View More</button>
				</div><br>
				
                </div>
                <p style="background-color:#eef1f6;padding:0.6rem;"></p>
		        </div>
			
           
			<div class="col-md-3" style="padding:1.5rem;">
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
		    </div>

		
		</div>
	</div>
   
</section> 



<?php endif;?>



<!-- =========================================== Main Area End ===================================   -->


<!-- ============================================ Main Area Start ================================   -->
<?php if($memberData):?>
<section>
<h4 style="text-align:center;padding:1rem 0rem;background-color:#0f50ad;"><span style="color:white;padding:1rem;">Member Dashboard</span></h4>
</section>

<section>
	<div class="container">
		<div class="row">
			<!-- -------------------------------- left news section start --------------------------  -->
			<div class="col-md-3" style="padding:1.5rem;">
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
		    </div>  
			<!-- -------------------------------- left news section end ----------------------------  -->

			<div class="col-md-6 mt-4 manDiv" style="padding:0.4rem;">
			<div class="" style="background-color:#ffffff;padding:2rem;margin-top:0rem;">
			<h4 style="margin-top:-2rem;padding-left:1.8rem;font-size:1rem;"><i class="bi bi-check-all"style="color:green;font-size:1.5rem;"></i>Verified Member  <span><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="float-end imgManDVer"></span></h4>
			<h4 style="margin-bottom:4rem;padding-left:2rem;">Businessman Information</h4>

            <div class="" style="margin-top:-2rem;">
				<p><span class="texLef">Name</span><span class="texRig"><?php echo $memberData['name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Father Name</span><span style="padding-left:6.5rem;color:red;"><?php echo $memberData['father_name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Mobiel Number</span><span style="padding-left:5rem;color:red;"><?php echo $memberData['mobile'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Email</span><span class="texRig"><?php echo $memberData['email'];?></span></p>
				</div>
                <div class="mt-4 mb-2">
				<button type="button" class="btn btn-primary float-end"   data-bs-toggle="modal" data-bs-target="#viewSectorData"><i class="bi bi-printer"></i>View More</button>
				</div><br>
				
                </div>
                <p style="background-color:#eef1f6;padding:0.6rem;"></p>
		        </div>
			
			<!-- -------------------------------- Right side news section start --------------------------  -->
           
			<div class="col-md-3" style="padding:1.5rem;">
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
					<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
            		<div class="p-5 text-white">
					<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
					<p class="texCol">1. Starting New Business..</p>
					</marquee>
            		</div>
            		</div>
		    </div>
			<!-- -------------------------------- Right side news section start --------------------------  -->


		
		</div>
	</div>
   
</section>



<?php foreach($verMem as $bus){?>
	

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding:1.5rem;">
						<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
						<div class="p-5 text-white">
						<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
						<p class="texCol">1. Starting New Business..</p>
						</marquee>
						</div>
						</div>
						<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
						<div class="p-5 text-white">
						<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
						<p class="texCol">1. Starting New Business..</p>
						</marquee>
						</div>
						</div>
				</div>  
	
				<div class="col-md-6 mt-4 manDiv" style="padding:0.4rem;"> 
				<div class="" style="background-color:#ffffff;padding:2rem;margin-top:0rem;">
			<h4 style="margin-top:-2rem;padding-left:1.8rem;font-size:1rem;"><i class="bi bi-check-all"style="color:green;font-size:1.5rem;"></i>Verified Member  </h4>
				<h4 style="margin-bottom:4rem;padding-left:2.6rem;">Businessman Information<span><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="float-end imgManD"></span></h4>
				<div class="mt-5">
					<p><span class="texLef">Name</span><span class="texRig1" style="padding-left:8.5rem;color:red;"><?php echo $bus['name'];?></span></p>
					</div>
					<div class="mt-1">
					<p><span class="texLef">Profession</span><span style="padding-left:6rem;color:red;"><?php echo $bus['business_type'];?></span></p>
					</div>
					<div class="mt-1">
					<p><span class="texLef">Email Id</span><span style="padding-left:7.2rem;color:red;;"><?php $eMail = $bus['email']; echo str_pad(substr($eMail,4), strlen($eMail), '*', STR_PAD_LEFT);?></span></p>
					</div>
					<div class="mt-1">
					<p><span class="texLef">Mobile No</span><span style="padding-left:5.9rem;color:red;"><?php $number = $bus['mobile']; echo str_pad(substr($number,4), strlen($number), '*', STR_PAD_LEFT);?></span></p>
					</div>
		  
					<div class="mt-4 mb-2">
					<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#viewEditModel" onclick="viewDataModel(<?php echo $bus['id'] ?>)" ><i class="bi bi-printer"></i>View More</button>
					</div><br>
					
					</div>
					<p style="background-color:#eef1f6;padding:0.6rem;"></p>
					</div>
				
			   
				<div class="col-md-3" style="padding:1.5rem;">
						<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
						<div class="p-5 text-white">
						<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
						<p class="texCol">1. Starting New Business..</p>
						</marquee>
						</div>
						</div>
						<div class="card card-cover rounded-4" style="border-top: 6px solid #0f50ad;background-color:#e2e2e2;">
						<div class="p-5 text-white">
						<marquee behavior="ulternative" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
						<p class="texCol">1. Starting New Business..</p>
						</marquee>
						</div>
						</div>
				</div>
	
			
			</div>
		</div>

		<?php }?>

		</section> 
		
				<!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
				<!-- Modal -->
				<div class="modal fade" id="viewEditModel" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<div class="modal-header" style="border-top:6px solid #245fae;">
				<h5 class="modal-title" id="exampleModalLabel" style="font-weight:700;">
				 Member Information
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<div class="container"  id="viewDetails">
				<p style="text-align:center;"><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="memImgMan"></p>
                </div>
				<div class="mt-5" >
					<div class="container"> 
						<div class="row">   
							<div class="col-md-1"></div>   
							<!-- test_1  -->
							<div class="col-md-5">
								<div class="memVerNa1st"><p class="font-col">Name</p></div>
								<div class="memVerNa2nd"><span id="memName"><?php echo $vModDa['name'];?></span></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p class="font-col">Father Name</p></div>
								<div class="memVerNa2nd"><span id="memFatName"><?php echo $vModDa['father_name'];?></span></div>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="memVerNa1st"><p class="font-col">Mobile</p></div>
								<div class="memVerNa2nd"><span id="memMobNo"><?php echo $vModDa['mobile'];?></span></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p class="font-col">Email</p></div>
								<div class="memVerNa2nd"><span id="memEmailId"><?php echo $vModDa['email'];?></span></div>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="memVerNa1st"><p class="font-col">DOB</p></div>
								<div class="memVerNa2nd"><span id="memDob"><?php echo $vModDa['dob'];?></span></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p class="font-col">Business Type</p></div>
								<div class="memVerNa2nd"><span id="memBusTId"><?php echo $vModDa['business_type'];?></span></div>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="memVerNa1st"><p class="font-col">Industries </p></div>
								<div class="memVerNa2nd"><span id="memIndName"><?php echo $vModDa['industries'];?></span></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p class="font-col">Business Name</p></div>
								<div class="memVerNa2nd"><span id="memBusName"><?php echo $vModDa['business_name'];?></span></div>
							</div>	


						</div>
					</div>
				

				</div>
				</div>
				</div>
				</div>
				</div>  


    
		 
	   


   <!-- ====================================  view section model start ===================================  -->
     

				<!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
				<!-- Modal -->
				<div class="modal fade" id="viewSectorData" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<div class="modal-header" style="border-top:6px solid #245fae;">
				<h5 class="modal-title" id="exampleModalLabel" style="font-weight:700;">
				 Member Information
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<div class="container"  id="viewDetails">
				<p style="text-align:center;"><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="memImgMan"></p>
                </div>
				<div class="mt-5" >
					<div class="container"> 
						<div class="row">   
							<div class="col-md-1"></div>   
							<!-- test_1  -->
							<div class="col-md-5">
								<div class="memVerNa1st"><p class="font-col">Name</p></div>
								<div class="memVerNa2nd"><?php echo $memberData['name'];?></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p class="font-col">Father Name</p></div>
								<div class="memVerNa2nd"><?php echo $memberData['father_name'];?></div>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="memVerNa1st"><p class="font-col">Mobile No</p></div>
								<div class="memVerNa2nd"><?php echo $memberData['mobile'];?></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p class="font-col">Email Id</p></div>
								<div class="memVerNa2nd"><?php echo $memberData['email'];?></div>
							</div>

						</div>
					</div>
				

				</div>
				</div>
				</div>
				</div>
				</div>  
								
     <!-- ====================================  view section model end ===================================  -->

<?php endif;?>



<!-- =========================================== Main Area End ===================================   -->

<!-- =================================== All Business type Start =========================================== -->

	<!-- =================================== All Business type End ============================================= -->


    </div>
		<!-- Content wrapper scroll end -->
    <?php $this->load->view('member/include/footer');?>
    <?php $this->load->view('member/include/js');?>


<script>
	 function viewDataModel(id)
	{
		//alert(id);
		$.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'member/Dashboard/viewDataModelData',
                data: {
                    'id': id
                },
				dataType: "json",
                success: function(dataAmi) {
					$('#memName').html(dataAmi.name);
					$('#memFatName').html(dataAmi.father_name);
					$('#memMobNo').html(dataAmi.mobile);
					$('#memEmailId').html(dataAmi.email);
					$('#memDob').html(dataAmi.dob);
					$('#memBusTId').html(dataAmi.business_type);
					$('#memIndName').html(dataAmi.	industries);
					$('#memBusName').html(dataAmi.business_name);
                },
            });
	}
</script>


	</body>


</html>