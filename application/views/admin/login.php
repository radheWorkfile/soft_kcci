<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    #logBacImgManA{background-image:url('<?php echo base_url();?>themes/assets/all_img/img-2.jpg');background-size:cover;height:100%;"}
  </style>
</head>
<body>
    

<section id="logBacImgManA">
    <div class="container">
        <div class="row" style="padding:8rem 3rem 3rem 3rem;">
            <div class="col-md-4"></div>
            <div class=" col-lg-4 col-md-12 col-sm-12 col-xs-12  formManInMob">
			
                 <form  id="loginData" method="post">
                 <div class="card" style="background-color:rgba(228, 220, 220, 0.6);">
									<div class="card-body">
											<h3 class="fc-list-day fc-day fc-day-sun fc-day-past" style="text-align:center;">Login</h3>

										<div class="was-validated mt-3">
											<label for="validationTextarea" class="form-label">Sign in to start your session</label>
											<input class="form-control is-invalid email" name="email_id" id="email_id"   placeholder="Enter Email Id *" required=""></input>
											<div class="invalid-feedback" style="color:black;">
											 Enter Valid Email Id
											</div>
										</div>

										<div class="was-validated mt-3">
											<input class="form-control is-invalid password" name="password" id="password"  placeholder="Enter Password *" required=""></textarea>
											<div class="invalid-feedback" style="color:black;">
											 Enter Password <span class="float-end"><a href="<?php echo base_url('Site/sign_up');?>">Sign Up</a>&nbsp;&nbsp;&nbsp;</span><br>
											</div>
										</div>

										 <div class="mt-3">
										 <button class="btn btn-primary" name="submit" id="submit" type="submit">Submit </button>
										 </div>


									</div>
								</div>
                 </form>
							
								
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>


<?php $this->load->view('admin/include/js');?>

<script>

        $('#loginData').submit(function(e) {
          e.preventDefault();
        $.ajax({
          url: "<?php echo base_url(); ?>Login/auth",
          type: "post",
          data: $(this).serialize(),
          success: function(data) {
          window.location.href='<?php //echo base_url('Login');?>'
          }
        });
      });


</script>

</body>
</html>