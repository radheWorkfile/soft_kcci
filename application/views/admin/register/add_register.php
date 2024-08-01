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

    <?php $this->load->view('admin/include/css'); ?>
   
</head>

<body>
    <?php $this->load->view('admin/include/left'); ?>
    <?php $this->load->view('admin/include/header'); ?>

    <!-- Content wrapper scroll start -->
    <div class="content-wrapper-scroll">

        <!-- --------------------------- 1st sectioin start ---------------------- -->

        <section>
            <h3 style="text-align:center;margin-top:1rem;margin-bottom:-1rem;color:#a2a2a2;color:#245fae;">New Register</h1>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="padding:2rem;">
                            <form action="" method="post" id="addData">
                                <div class="card">
                                    <div class="row">
                                        <!-- --------------------------- Personal Details Start  ---------------------- -->
                                        <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Pe<span style="border-bottom:2px solid #245fae;">rsonal Details</span> </h1>

                                        <!-- <div class="col-md-12" id="errResultMsg">Message will display</div> -->

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">Name *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">Father Name *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                        <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Enter Father Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">Grand Father Name *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                         <input type="text" class="form-control"name="grand_father" id="grand_father" placeholder="Grand Father Name *" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">Date Of Birth *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                        <input type="date" class="form-control" name="dob" id="dob" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">Highest Qualification *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                        <input type="text" class="form-control"name="p_h_qualification" id="p_h_qualification" placeholder="Enter State Name *" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">Village / City *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                        <input type="text" class="form-control"name="town_name" id="town_name" placeholder="Enter Town Name *" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">State/Country  *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                        <input type="text" class="form-control"name="sta_con_name" id="sta_con_name" placeholder="Enter State Name *" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">Zip/Postcode *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                        <input type="text" class="form-control"name="p_sta_con" id="p_sta_con" placeholder="Enter State Name *" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            </div>






  
  

                                            

                                    
                                       

                           



                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="">User Type *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                        <select class="form-select" name="user_type" id="user_type" aria-label="Default select example">
                                                            <option selected="">--- Select One ---</option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Founder</option>
                                                            <option value="3">Mentor</option>
                                                            <option value="5">Member</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- --------------------------- Personal Details end  ---------------------- -->
                                            <!------------------------------ contact section start ------------------------->
                                            <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Co<span style="border-bottom:2px solid #245fae;">ntact Details</span> </h1>

                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <label for="">Mobile Number*</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                            <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number *">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <label for="">Email Id *</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Valid Email Id *">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <label for="">Password *</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                            <input type="text" id="password" name="password" class="form-control" placeholder="Enter password *">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <label for="">Confirm Password *</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                            <input type="text" id="con_password" name="con_password" class="form-control" placeholder="Enter Confirm Password *">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <label for="">Address *</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                            <textarea  id="address" name="address" placeholder="Enter Your Address *" class="form-control"  cols="30" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                                <!------------------------------ contact section end --------------------------->


                                                <!-- --------------------------- address section start -----------------------------  -->
                                                <div class="col-md-6">
                                                    <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Te<span style="border-bottom:2px solid #245fae;">mporary Address </span> </h1>

                                                        <div class="card-body">
                                                            <label for="">Village / City *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <input type="type" name="tvillage" id="tvillage" class="form-control" placeholder="Enter Village Name *">
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Bulding / House Number *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <input type="type" class="form-control" name="tbulding" id="tbulding" placeholder="Enter House Number *">
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Landmark *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <input type="type" name="tlandmark" id="tlandmark" class="form-control" placeholder="Enter Landmark *">
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select State *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select" id="tstate" name="tstate" onchange="getDistric(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select State ---</option>
                                                                    <?php foreach ($state as $st) { ?>
                                                                        <option value="<?php echo $st['id'] ?>"><?php echo $st['location']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Selct Distric *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <select class="form-select" id="tdistric" name="tdistric" onchange="getpPolice(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Distric ---</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Police Station *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select" id="tpolice" name="tpolice" onchange="getpBlock(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Police Station ---</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Block *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <select class="form-select" id="tblock" name="tblock" onchange="getPostOff(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Block ---</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Post Office *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select" id="tpost" name="tpost" onchange="getPinCode(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Post Office ---</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Pin Code *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <select class="form-select" id="tpin" name="tpin" aria-label="Default select example">
                                                                    <option selected="">--- Select Pin Code ---</option>
                                                                </select>
                                                            </div>
                                                        </div>





                                                </div>


                                                <div class="col-md-6">
                                                    <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Pe<span style="border-bottom:2px solid #245fae;">rmanent Address</span> </h1>


                                                        <div class="card-body">
                                                            <label for="">Village / City *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <input type="type" name="pvillage" id="pvillage" class="form-control" placeholder="Enter Village Name *">
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Bulding / House Number *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <input type="type" class="form-control" name="pbulding" id="pbulding" placeholder="Enter House Number *">
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Landmark *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <input type="type" name="plandmark" id="plandmark" class="form-control" placeholder="Enter Landmark *">
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select State *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select" id="pstate" name="pstate" onchange="getDistricPar(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select State ---</option>
                                                                    <?php foreach ($state as $st) { ?>
                                                                        <option value="<?php echo $st['id'] ?>"><?php echo $st['location']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Selct Distric *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <select class="form-select" id="pdistric" name="pdistric" onchange="getpPolicePar(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Distric ---</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Police Station *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select" id="ppolice" name="ppolice" onchange="getpBlockPar(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Police Station ---</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Block *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <select class="form-select" id="pblock" name="pblock" onchange="getPostOffPar(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Block ---</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Post Office *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select" id="ppost" name="ppost" onchange="getPinCodePar(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select Post Office ---</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <label for="">Select Pin Code *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                                                                <select class="form-select" id="ppin" name="ppin" aria-label="Default select example">
                                                                    <option selected="">--- Select Pin Code ---</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                </div>
                                                <!-- --------------------------- address section end -------------------------------  -->




                                                <!-- --------------------------- Occupation Details details start   ---------------------- -->
                                                <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Oc<span style="border-bottom:2px solid #245fae;">cupation Details</span> </h1>

                                                    <!-- test  -->
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="">Select Sector *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select selItem" name="sector" id="sector" onchange="getIndustries(this.value)" aria-label="Default select example">
                                                                    <option selected="">--- Select One ---</option>
                                                                    <?php foreach ($sector as $sec) { ?>
                                                                        <option value="<?php echo $sec['id'] ?>"><?php echo $sec['sector_name'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6" id="business_type_section" style="display:none;">
                                                        <div class="card-body">
                                                            <label for="">Select Type Of Business *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select selItem" name="business_type" id="business_type" aria-label="Default select example">
                                                                    <option selected="">--- Select One ---</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="">Select Industries *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <select class="form-select selItem" name="industries" id="industries" aria-label="Default select example">
                                                                    <option selected="">--- Select One ---</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" id="business_name" style="display:none;" >
                                                        <div class="card-body">
                                                            <label for="">Business Name *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <input type="text" class="form-control" name="business_name" id="business_name" placeholder="Enter Business Name">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12" id="city_section" style="display:none;">
                                                        <div class="card-body">
                                                            <label for="">Current City *</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                                                <input type="text" class="form-control" name="city" id="city" placeholder="Enter City Name">
                                                            </div>
                                                        </div>
                                                    </div>







                                                    <div class="col-md-4" style="padding:1rem;margin-left:1rem;"> <button type="submit" name="submit" id="submit_result" class="btn btn-primary"><span style="padding-left:1.5rem;padding-right:1.5rem;">Submit</span></button></div>



                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
    </section>
    <!-- --------------------------- 1st sectioin end ---------------------- -->


    <!-- --------------------------- 1st sectioin end ---------------------- -->



    </div>
    <!-- Content wrapper scroll end -->
    <?php $this->load->view('admin/include/footer'); ?>
    <?php $this->load->view('admin/include/js'); ?>



    <script>
        $(document).ready(function() {
            $("#cty").hide();
            $(".othDetInp").hide();
            $(".selItem").change(function() {
                var actNbtn = $('.selItem').val();
                if (actNbtn == '3') {
                    $("#cty").show();
                } else {
                    $("#cty").hide();
                }
                if (actNbtn == '7') {
                    $(".othDetInp").show();
                } else {
                    $(".othDetInp").hide();
                }

                // alert("helll");

            });
        });

        $(document).ready(function() {
    $(".marrDet").hide();
    $(".fatDetMan").hide();

            $("#married").change(function() {
                var actNbtn = $('#married').val();
                if (actNbtn == '1') {
                    $(".marrDet").show();
                    $(".fatDetMan").hide();
                } else if(actNbtn == '2'){
                    $(".marrDet").hide();
                    $(".fatDetMan").show();
                }
            });
        });

        
     

        $("#addData").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
            type: "post",
            url:base_url+"admin/Register/saveData",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType:'json',
            success: function(data) 
				{
            if(data.icon=="error") 
            {
            var valid = '';
            $.each(data.text, function (i, item) {
            valid += item;
            });
            Swal.fire({
            position: "center",
            icon: data.icon,
            html: valid,
            showConfirmButton: !1,
            timer: 1500
            });
            } else {
            Swal.fire({
            position: "center",
            icon: data.icon,
            title: data.text,
            showConfirmButton: 1,
            timer: 1500
            });
            setTimeout(function () {window.location.reload(1);}, 1500);
            }
                }
            });
        });


        


        function get_subCaste(caste) {
            // alert(caste);
            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_sub_caste',
                type: "POST",
                data: {
                    'caste': caste
                },
                dataType: 'json',
                success: function(data) {
                    $('#sub-caste').empty();
                    $('#sub-caste').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#sub-caste').append('<option value="' + item.id + '">' + item.caste + '</option>')
                    });
                }
            });
        }


        function getDistric(state) {
            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_distric',
                type: "POST",
                data: {
                    'state': state
                },
                dataType: 'json',
                success: function(data) {
                    $('#tdistric').empty();
                    $('#tdistric').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#tdistric').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });
        }
// ---------------------------------------------------------- 

        function getpPolice(distric) {
            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_police',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#tpolice').empty();
                    $('#tpolice').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#tpolice').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_post',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#tpost').empty();
                    $('#tpost').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#tpost').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_block',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#tblock').empty();
                    $('#tblock').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#tblock').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });


            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_post',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#tpin').empty();
                    $('#tpin').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#tpin').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

        }

        // -----------------------------------------  

        
        function getDistricPar(state)
        {
            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_distric',
                type: "POST",
                data: {
                    'state': state
                },
                dataType: 'json',
                success: function(data) {
                    $('#pdistric').empty();
                    $('#pdistric').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#pdistric').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });
        }

        function getpPolicePar(distric) {
            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_police',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#ppolice').empty();
                    $('#ppolice').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#ppolice').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_post',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#ppost').empty();
                    $('#ppost').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#ppost').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_block',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#pblock').empty();
                    $('#pblock').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#pblock').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });


            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_post',
                type: "POST",
                data: {
                    'distric': distric
                },
                dataType: 'json',
                success: function(data) {
                    $('#ppin').empty();
                    $('#ppin').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#ppin').append('<option value="' + item.id + '">' + item.location + '</option>')
                    });
                }
            });

        }


        // ----------------------------------------------------  



        function getIndustries(sector) {

            if (sector == 18) {
                $('#business_name_section').show('slow');
                $('#business_name').show('slow');
                $('#registration_number_section').show('slow');
                $('#registered_address_section').show('slow');
                $('#email_section').show('slow');
                $('#contact_section').show('slow');
                $('#gst_section').show('slow');
                $('#business_itr_file_section').show('slow');
                $('#photo_section').show('slow');
                $('#business_type_section').show('slow');
                $('#city_section').hide('slow');
            } else {
                $('#business_name_section').hide('slow');
                $('#business_name').hide('slow');
                $('#registration_number_section').hide('slow');
                $('#registered_address_section').hide('slow');
                $('#email_section').hide('slow');
                $('#contact_section').hide('slow');
                $('#gst_section').hide('slow');
                $('#business_itr_file_section').hide('slow');
                $('#photo_section').hide('slow');
                $('#business_type_section').hide('slow');
                $('#city_section').show('slow');
            }

            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_business_type',
                type: "POST",
                data: {
                    'sector': sector
                },
                dataType: 'json',

                success: function(data) {
                    $('#business_type').empty();
                    $('#business_type').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#business_type').append('<option value="' + item.id + '">' + item.business_type + '</option>')
                    });
                }
            });

            $.ajax({
                url: '<?= base_url() ?>admin/Register/get_industries',
                type: "POST",
                data: {
                    'sector': sector
                },
                dataType: 'json',

                success: function(data) {
                    $('#industries').empty();
                    $('#industries').append('<option value="">---- Select One ----</option> ');
                    $.each(data, function(i, item) {
                        $('#industries').append('<option value="' + item.id + '">' + item.industeries_name + '</option>')
                    });
                }
            });
        }
    </script>



</body>


</html>