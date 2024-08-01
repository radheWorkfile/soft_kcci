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
</head>
<body>
    

<section style="background-image:url('<?php echo base_url();?>themes/assets/all_img/img-2.jpg');background-size:cover;height:100%;">
    <div class="container">
        <div class="row" style="padding:8rem 3rem 3rem 3rem;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
			
                 <form  id="registerData" method="post">
                 <div class="card" style="background-color:rgba(228, 220, 220, 0.6);">
									<div class="card-body">
											<h3 class="fc-list-day fc-day fc-day-sun fc-day-past" style="text-align:center;">Sign Up </h3>

                                            <div class="was-validated mt-1">
											<input  type="text" class="form-control is-invalid email" name="name" id="name"   placeholder="Enter User Name *" required=""></input>
											<div  class="invalid-feedback" style="color:black;">
											 Enter User Name
											</div>
										    </div>

                                            <div class="was-validated mt-1">
											<input type="email" class="form-control is-invalid email" name="email" id="email"   placeholder="Enter Email Id *" required=""></input>
											<div class="invalid-feedback" style="color:black;">
											 Enter Valid Email Id
											</div>
										    </div>

                                            <div class="was-validated mt-1">
											<input type="number" class="form-control is-invalid email" name="mobile" id="mobile"   placeholder="Enter Mobile Number *" required=""></input>
											<div class="invalid-feedback" style="color:black;">
											 Enter Mobile Number
											</div>
										    </div>

										

										<div class="was-validated mt-1">
											<input type="text" class="form-control is-invalid password" name="password" id="password"  placeholder="Enter Password *" required=""></textarea>
											<div class="invalid-feedback" style="color:black;">
											 Enter Password
											</div>
										</div>

                                        <div class="was-validated mt-1">
											<input type="text" class="form-control is-invalid password" name="show_password" id="show_password"  placeholder="Re-Enter Password *" required=""></textarea>
											<div class="invalid-feedback" style="color:black;">
											 Re-Enter Password <span class="float-end"><a href="<?php echo base_url('login');?>">Login</a>&nbsp;&nbsp;&nbsp;</span><br>
											</div>
										</div>

										 <div class="mt-1">
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

$("#registerData").on("submit", function(e) {
    alert("hello con");
            e.preventDefault();
            $.ajax({
                type: "post",
                url: '<?= base_url() ?>Site/registration',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    console.log(data);
                    // window.location.reload(true);               
                }
            });
        });

</script>

</body>
</html>