

<!doctype html>
<!--    style="line-height:2;"     -->
<html lang="en,hi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content="DynamicLayers">
    <title>Ngo/Charity|| Farmer becomes businessman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <style type="text/css">
    
      
    input{ width: 80%;padding: 5px;border-radius: 10px;}
    .formMan{margin-top:50px;}
    .formManf{margin-top:50px; height:100px; width:86%!important;margin-left:15px;}
  
 
    </style>
   <?php $this->load->view('website/include/css'); ?>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<?php $this->load->view('website/include/header'); ?>

    <div class="header-height"></div>




<section>
<div class="container" style="padding-top:65px;">
    <div class="row">
        <div class="col-md-12">
            <span><h2 class="creReg">Create New Account</h2></span>
        </div>
    </div>
</div>
</section>


<section>
<div class="container" style="padding-top:55px; padding-bottom:55px;">


<div class="row">   
  
<div class="col-md-4" style="padding:1rem 2rem;">
  <p><img src="<?php echo base_url();?>themes/img/image_reg.png" alt="" class="regFormImg"></p>
</div>


<div class="col-md-8 regForm">

<form action="" method="post" id="addData">
  <div class="row" style="background-color:#e2e2e2;padding:2rem 1rem 0.5rem 1rem;border-radius:0.6rem;">
         <h3 class="pb-2">Personal Details</h3>

        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Name *</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Father Name *</label>
        <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Enter Father Name" aria-describedby="emailHelp">
        </div>
        </div>
    
        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Grand Father Name *</label>
        <input type="text" class="form-control"name="grand_father" id="grand_father" placeholder="Grand Father Name *" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Date Of Birth *</label>
        <input type="date" class="form-control" name="dob" id="dob" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label class="form-label pb-2">Highest Qualification *</label>
        <input type="text" class="form-control"name="p_h_qualification" id="p_h_qualification" placeholder="Enter State Name *" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label  class="form-label pb-2">Town Name *</label>
        <input type="text" class="form-control"name="town_name" id="town_name" placeholder="Enter Town Name *" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label class="form-label pb-2">State/Country *</label>
        <input type="text" class="form-control"name="sta_con_name" id="sta_con_name" placeholder="Enter State Name *" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label class="form-label pb-2">Zip/Postcode *</label>
        <input type="text" class="form-control"name="p_sta_con" id="p_sta_con" placeholder="Enter State Name *" aria-describedby="emailHelp">
        </div>
        </div>
  
        <div class="col-md-6">
        <div class="mb-3">
        <label for="disabledSelect" class="form-label pb-2">Caste </label>
        <select id="caste" class="form-select" name="caste"  onchange="get_subCaste(this.value);">
        <option value="">--- Select Caste ---</option>
        <?php foreach ($caste as $c => $cas) : ?>
        <option value="<?php echo $cas['id'] ?>"><?php echo $cas['caste']; ?></option>
        <?php endforeach; ?>
        </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Sub-Caste *</label>
        <select class="form-select" id="sub-caste" name="sub-caste">
        <option value="">--- Select Sub-Caste ---</option>
        </select>
        </div>
        </div>
  
  </div>


<!-- ----------------------------------   Permanent Section Details Start  ---------------------    -->


       <div class="row" style="background-color:#e2e2e2;padding:0rem 1rem 0.5rem 1rem;border-radius:0.6rem;margin-top:1rem;">
         <h3 class="pb-2 pt-2">Occupation Details</h3>

        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Select Sector *</label>
        <select  class="form-select" name="sector" id="sector" onChange="getIndustries(this.value)">
        <option value="">Select Sector</option>
        <option selected="">--- Select One ---</option> 
        <?php foreach ($sector as $sec) { ?>
        <option value="<?php echo $sec['id'] ?>"><?php echo $sec['sector_name'] ?></option>
        <?php } ?>
        </select>
        </div>
        </div>
        <div class="col-md-6" id="business_type_section" style="display:none;">
        <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label pb-2">Select Type Of Business *</label>
        <select id="" class="form-select"  name="business_type" id="business_type">
        <option value="">Select Type Of Business</option>
        <?php foreach ($businessType as $bus) { ?>
        <option value="<?php echo $bus['id'] ?>"><?php echo $bus['business_type'] ?></option>
        <?php } ?>
        </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Select Industries *</label>
        <select  class="form-select" name="industries" id="industries">
        <option value="">Select Industries</option>
        </select>
        </div>
        </div>
        <div class="col-md-12" id="city_section" style="display:none;">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Current City *</label>
        <input type="text" class="form-control" name="city" id="city" placeholder="Enter Current City" aria-describedby="emailHelp">
        </div>
        </div>
      
     
        <div class="col-md-6"  id="buss_nameSec" style="display:none;">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Enter Business Name  *</label>
        <input type="text" class="form-control"name="buss_name" id="buss_name" placeholder="Enter Community  *" aria-describedby="emailHelp">
        </div>
        </div>


       


 


 </div>
 
 <!-- -----------------------------------  Permanent Section Details  End---------------------    -->

       <!-- ----------------------------------   Contact Section Details Start  ---------------------    -->


       <div class="row" style="background-color:#e2e2e2;padding:0rem 1rem 0.5rem 1rem;border-radius:0.6rem;margin-top:1rem;">
         <h3 class="pb-2 pt-2">Contact Details</h3>

        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Mobile Number *</label>
        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Email Id *</label>
        <input type="text" class="form-control"id="email" name="email" placeholder="Enter Email Id" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-12">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Address *</label>
        <textarea cols="30" rows="2"  class="form-control"id="registration_address" name="registration_address" placeholder="Enter Full Address *"></textarea>
        </div>
        </div>
        <div class="col-md-6 mt-2">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Password *</label>
        <input type="text" class="form-control"id="password" name="password" placeholder="Enter Password" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="col-md-6 mt-2">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label pb-2">Confirm Password *</label>
        <input type="text" class="form-control"id="con_password" name="con_password" placeholder="Enter Confirm Password" aria-describedby="emailHelp">
        </div>
        </div>
 </div>
 
 <!-- -----------------------------------   Contact Section Details  End---------------------    -->


  <button type="submit" class="btn btn-success mt-4 float-end subButMan">Submit Details</button>
</form>




</div>





   
</div>


    </div>
</section>


<?php $this->load->view('website/include/footer'); ?>
<?php $this->load->view('website/include/js'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
		<script>



    function get_subCaste(caste) {
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


        $("#addData").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
            type: "post",
            url: '<?= base_url() ?>Site/savaSignUpData',
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
            showConfirmButton: !1,
            timer: 1500
            });
            setTimeout(function () {window.location.reload(1);}, 1500);
            }
                }
            });
        });

        




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
                $('#registration_number_section').show('slow');
                $('#registered_address_section').show('slow');
                $('#buss_nameSec').show('slow');
                $('#contact_section').show('slow');
                $('#gst_section').show('slow');
                $('#business_itr_file_section').show('slow');
                $('#photo_section').show('slow');
                $('#business_type_section').show('slow');
                $('#city_section').hide('slow');
            } else {
                $('#business_name_section').hide('slow');
                $('#registration_number_section').hide('slow');
                $('#registered_address_section').hide('slow');
                $('#buss_nameSec').hide('slow');
                $('#contact_section').hide('slow');
                $('#gst_section').hide('slow');
                $('#business_itr_file_section').hide('slow');
                $('#photo_section').show('slow');
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