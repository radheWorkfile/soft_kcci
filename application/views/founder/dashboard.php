

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
         .texLef{padding-left:3rem;color:#123456;font-weight:800;}.texRig{padding-left:12rem;}
		 .texRig1{padding-left:8.5rem;}
		 .texRigView{padding-left:8rem;}
		 .memImgMan{height:10rem;border:2px solid #0f50ad;border-radius:1rem;border-top:8px solid #123456;}
		 .memVerNa1st{width:35%;display:inline-block;color:#0f50ad;font-weight:800;}
		 .memVerNa2nd{width:62%;display:inline-block;color:green;font-weight:500;}
		 .checkManWro{color:red;font-size:1.2rem;font-weight:}
		 /* <i class="bi bi-x checkManWro"></i> */

	</style>


	</head>

	<body>
		<?php $this->load->view('founder/include/left');?>
	<?php $this->load->view('founder/include/header');?>

        <!-- Content wrapper scroll start -->
		<div class="content-wrapper-scroll">




<!-- ============================================ Main Area Start ================================   -->
<?php if($founderNver):?>



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
			<h6 style="padding-left:2.8rem;"><i class="bi bi-x checkManWro"></i>Status Not Verified </h6>
			<h4 style="margin-bottom:4rem;padding-left:2.6rem;">Founder Member <span><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="float-end" style="height:5rem;"></span></h4>
            <div class="mt-5">
				<p><span class="texLef">Name</span><span class="texRig"><?php echo $founderNver['name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Contact Numebr</span><span style="padding-left:6.5rem;"><?php echo $founderNver['mobile'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">DOB </span><span style="padding-left:12rem;"><?php echo $founderNver['dob'];?></span></p>
				</div>
                <div class="mt-4 mb-2">
				
				<button type="button" class="btn btn-primary float-end"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-printer"></i>View More</button>
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


<section>
	<!-- Button trigger modal -->

	<!-- class="btn btn-primary float-end"  data-bs-toggle="modal" data-bs-target="#exampleModal" -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border:2px solid white;">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span style="text-align:center;">Welcome In Kcci Team.</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="container">
		<div class="row p-4">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<p style="color:#123456;"><i class="bi bi-book-half" style="font-size:1.2rem;"></i>&nbsp;&nbsp;Sorry' You are not Verified.</p>
			</div>
		</div>
		<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-printer"></i>Wait ...</button>

	   </div>
      </div>
   
    </div>
  </div>
</div>
</section>



<?php endif;?>



<!-- =========================================== Main Area End ===================================   -->


<!-- ============================================ Main Area Start ================================   -->
<?php if($founderVerMem):?>
<section>
<h4 style="text-align:center;padding:1rem 0rem;background-color:#0f50ad;"><span style="color:white;padding:1rem;">Verified Founder Member </span></h4>
</section>

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
				<h6 style="padding-left:2.8rem;">Status Verified <span style="color:green;font-size:1.5rem;margin-bottom:-1rem;"><i class="bi bi-check-all"></i></span> </h6>
			<h4 style="margin-bottom:4rem;padding-left:2.6rem;">Founder Member <span><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="float-end" style="height:5rem;"></span></h4>
				<div class="mt-5">
				<p><span class="texLef">Name</span><span class="texRig"><?php echo $founderVerMem['name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Contact Numebr</span><span style="padding-left:6.5rem;"><?php echo $founderVerMem['mobile'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">DOB </span><span style="padding-left:12rem;"><?php echo $founderVerMem['dob'];?></span></p>
				</div>
             
                <div class="mt-4 mb-2">
				<button type="button" class="btn btn-primary float-end"   data-bs-toggle="modal" data-bs-target="#viewSectorData" onClick="viewDataModel(<?php echo $founderVerMem['id']?>)"><i class="bi bi-printer"></i>View More</button>

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
				<p style="text-align:center;"><img src="<?php echo base_url()."uploads/founder_img/".$founderVerMem['photo'];?>" alt="" class="memImgMan"></p>
				
                </div>
				<div class="mt-5" >
					<div class="container">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="memVerNa1st"><p>Name</p></div>
								<div class="memVerNa2nd"><span id="fouName"></span></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p>Father Name</p></div>
								<div class="memVerNa2nd"><span id="fouFatName"></span></div>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="memVerNa1st"><p>Mobile</p></div>
								<div class="memVerNa2nd"><span id="fouMobNo"></span></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p>Email</p></div>
								<div class="memVerNa2nd"><span id="fouEmail"></span></div>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="memVerNa1st"><p>DOB</p></div>
								<div class="memVerNa2nd"><span id="fouDob"></span></div>
							</div>
							<div class="col-md-6">
								<div class="memVerNa1st"><p>Business Type</p></div>
								<div class="memVerNa2nd"><span id="fouBusTy"></span></div>
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



    </div>
		<!-- Content wrapper scroll end -->
    <?php $this->load->view('founder/include/footer');?>
    <?php $this->load->view('founder/include/js');?>

	<script>
	 function viewDataModel(id)
	{
		$.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'founder/Dashboard/viewDataModelData',
                data: {
                    'id': id
                },
				dataType: "json",
                success: function(dataAmi) {
					$('#founphoto').html(dataAmi.photo);
					$('#fouName').html(dataAmi.name);
					$('#fouFatName').html(dataAmi.father_name);
					$('#fouMobNo').html(dataAmi.mobile);
					$('#fouEmail').html(dataAmi.email);
					$('#fouDob').html(dataAmi.dob);
					$('#fouBusTy').html(dataAmi.business_type);
					$('#fouIndName').html(dataAmi.industries);
					$('#fouBusName').html(dataAmi.business_name);

                },
            });
	}
</script>

	</body>


</html>