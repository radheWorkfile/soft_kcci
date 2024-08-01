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
         .texLef{padding-left:3rem;}.texRig{padding-left:12rem;}
		 .texColll{color:red;}
  		.font-col{color:#123456;}
		  .heaTexMan{margin-bottom:4rem;padding-left:2.6rem;color:#123456;}




	</style>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	</head>

	<body>
		<?php $this->load->view('guest/include/left');?>
	<?php $this->load->view('guest/include/header');?>
	<?php $this->load->view('guest/include/message');?>

        <!-- Content wrapper scroll start -->
		<div class="content-wrapper-scroll">
<!-- ============================================ Main Area Start ================================   -->

<section>
<h4 style="text-align:center;padding:1rem 0rem;background-color:#0f50ad;"><span style="color:white;padding:1rem;">Guest Dashboard</span></h4>
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
            <?php foreach ($guest_user as $re => $ten) { ?>
             
			<div class="" style="background-color:#ffffff;padding:2rem;margin-top:0rem;">
			<p class="font-col"><i class="bi bi-x checkManWro texColll"></i>Not Verified</p>
			<h4 class="heaTexMan">Guest Information <span><img src="<?php echo base_url();?>themes/dashboard/sonu.png" alt="" class="float-end" style="height:5rem;"></span></h4>
            <div class="mt-5">
				<p><span class="texLef">Name</span><span class="texRig"><?php echo $ten['name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Father Name</span><span style="padding-left:9rem;"><?php echo $ten['father_name'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Mobiel Number</span><span style="padding-left:7.5rem;"><?php echo $ten['mobile'];?></span></p>
				</div>
                <div class="mt-1">
				<p><span class="texLef">Email</span><span class="texRig"><?php echo $ten['email'];?></span></p>
				</div>
                <div class="mt-4 mb-2">
				<button type="button" onclick="getProFun()" class="btn btn-primary float-end" id="viewMessage"><i class="bi bi-printer"></i>View More</button>
				</div><br>
				
                </div>
                <p style="background-color:#eef1f6;padding:0.6rem;"></p>
                <?php }?>
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

<section style="background-color:white;padding:2rem;margin-top:-1rem;"></section>





<!-- =========================================== Main Area End ===================================   -->
    </div>
		<!-- Content wrapper scroll end -->
    <?php $this->load->view('guest/include/footer');?>
    <?php $this->load->view('guest/include/js');?>

	<script>
		$document.ready(function(){
			$("#viewMessage").click(function(){
				$(this).Swal.fire({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success"
});
			})
		})

		function getProFun()
		{
		// Swal.fire("Your application is approved very soon!");
		Swal.fire({ title: "Please wait for a while.", text: "Your application is approved very soon!",icon: "question"});
		}
	</script>


	</body>


</html>