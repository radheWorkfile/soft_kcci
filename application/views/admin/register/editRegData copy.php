 
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
            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $regist['id'] ?>" placeholder="Enter Full Name">
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $regist['name'] ?>" placeholder="Enter Full Name">
            </div>
            </div>
             </div>

            <div class="col-md-6">
            <div class="card-body">
            <label for="">Father Name *</label>
            <div class="input-group">   
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="father_name" id="father_name" value="<?php echo $regist['father_name'] ?>" class="form-control" placeholder="Enter Father Name">
            </div>
            </div>
            </div>  

            <div class="col-md-6">
            <div class="card-body">
            <label for="">Grand Father Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="grand_father" id="grand_father" value="<?php echo $regist['grand_father'] ?>" class="form-control" placeholder="Enter Grand Father Name ">
            </div>
            </div></div>

        
            <div class="col-md-6">
            <div class="card-body">
             <label for="">Date Of Birth *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="date" name="dob" id="dob" value="<?php echo $regist['dob'] ?>" class="form-control" placeholder="Enter Date Of Birth *">
            </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="card-body">
            <label for="">Caste *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select class="form-select" name="caste" id="caste" onchange="get_subCaste(this.value);" aria-label="Default select example">
            <option selected="">--- Select One ---</option>
            <?php foreach ($caste as $c => $cas) : ?>
                <option value="<?php echo $cas['id'] ?>" <?php echo ($cas['id'] == $regist['cst']) ? "selected" : "" ?>><?php echo $cas['caste']; ?></option>

            <?php endforeach; ?>
            </select>
            </div>
            </div>
            </div>

            <div class="col-md-6">
             <div class="card-body">
            <label for="">Sub-Caste *</label>
             <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select" id="sub-caste" name="sub-caste" aria-label="Default select example">
            <option selected="">--- Select One ---</option>
            <?php foreach($subcaste as $cas) { ?>
            <option value="<?php echo $cas['id'] ?>" <?php echo ($cas['id'] == $regist['sbcst']) ? "selected" : "" ?>><?php echo $cas['caste'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>
            </div>


            <div class="col-md-6">
            <div class="card-body">
            <label for="">Community *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="community" id="community" value="<?php echo $regist['community'] ?>" class="form-control" placeholder="Enter Community Name *">
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
            <option value="1" <?php echo ($regist['user_type'] == 1) ? "selected" : "" ?>>Admin</option>
            <option value="2" <?php echo ($regist['user_type'] == 2) ? "selected" : "" ?>>Founder</option>
            <option value="3" <?php echo ($regist['user_type'] == 3) ? "selected" : "" ?>>Mentor</option>
            <option value="5" <?php echo ($regist['user_type'] == 5) ? "selected" : "" ?>>Member</option>        
            </select>
            </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="card-body">
            <label for="">Password *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="community" id="community" value="<?php echo $regist['password'] ?>" class="form-control" placeholder="Enter Community Name *">
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
            <input type="number" name="mobile" id="mobile" class="form-control" value="<?php echo $regist['mobile'] ?>" placeholder="Enter Mobile Number *">
            </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="card-body">
            <label for="">Email Id *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="email" id="email" name="email" value="<?php echo $regist['email'] ?>" class="form-control" placeholder="Enter Valid Email Id *">
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
            <input type="type" name="tvillage" value="<?php echo $regist['tvillage'] ?>" id="tvillage" class="form-control" placeholder="Enter Village Name *">
            </div>
            </div>

            <div class="card-body">
            <label for="">Bulding / House Number *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="type" class="form-control"  value="<?php echo $regist['tbulding'] ?>" name="tbulding" id="tbulding" placeholder="Enter House Number *">
            </div>
            </div>

            <div class="card-body">
            <label for="">Landmark *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="type" name="tlandmark" value="<?php echo $regist['tlandmark'] ?>" id="tlandmark" class="form-control" placeholder="Enter Landmark *">
            </div>
             </div>

            <div class="card-body">
            <label for="">Select State *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select" id="tstate" name="tstate" onchange="getDistric(this.value)" aria-label="Default select example">
            <option selected="">--- Select State ---</option>
            <?php foreach ($state as $st) { ?>
            <option value="<?php echo $st['id'] ?>" <?php echo ($st['id'] == $regist['tstate']) ? "selected" : "" ?>><?php echo $st['location']; ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Selct Distric *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select class="form-select" id="tdistric" name="tdistric"  onchange="getPolice(this.value)" aria-label="Default select example">
            <?php if(empty($regist['tdistric'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($distr as $dis) { ?>
            <option value="<?php echo $dis['district_id'] ?>" <?php echo ($dis['district_id'] == $regist['tdis']) ? "selected" : "" ?>><?php echo $dis['district_name'] ?></option>
            <?php } ?>            
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Select Police Station *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select" id="tpolice" name="tpolice" onchange="getpBlock(this.value)" aria-label="Default select example">
            <option selected="">--- Select Police Station ---</option>
            <?php if(empty($regist['tpolice'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($police as $poic) { ?>
            <option value="<?php echo $poic['police_id'] ?>" <?php echo ($poic['police_id'] == $regist['tpolc']) ? "selected" : "" ?>><?php echo $poic['police_name'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Select Block *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select class="form-select" id="tblock" name="tblock" onchange="getPostOff(this.value)" aria-label="Default select example">
            <option selected="">--- Select Block ---</option>
            <?php if(empty($regist['tblock'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($block as $blck) { ?>
            <option value="<?php echo $blck['block_id'] ?>" <?php echo ($blck['block_id'] == $regist['tbloc']) ? "selected" : "" ?>><?php echo $blck['block_name'] ?></option>
            <?php }  ?>   
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Select Post Office *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select" id="tpost" name="tpost" onchange="getPinCode(this.value)" aria-label="Default select example">
            <option selected="">--- Select Post Office ---</option>
            <?php if(empty($regist['tpost'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($post as $pst) { ?>
            <option value="<?php echo $pst['post_id'] ?>" <?php echo ($pst['post_id'] == $regist['tpos']) ? "selected" : "" ?>><?php echo $pst['post_name'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Select Pin Code *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select class="form-select" id="tpin" name="tpin" aria-label="Default select example">
            <option selected="">--- Select Pin Code ---</option>
            <?php if(empty($regist['tpin'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($pin as $pn) { ?>
            <option value="<?php echo $pn['pin_id'] ?>" <?php echo ($pn['pin_id'] == $regist['tpn']) ? "selected" : "" ?>><?php echo $pn['pin_no'] ?></option>
            <?php } ?>
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
            <input type="type" name="pvillage" value="<?php echo $regist['pvillage'] ?>" id="pvillage" class="form-control" placeholder="Enter Village Name *">
            </div>
            </div>

            <div class="card-body">
            <label for="">Bulding / House Number *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="type" class="form-control" value="<?php echo $regist['pbulding'] ?>" name="pbulding" id="pbulding" placeholder="Enter House Number *">
            </div>
            </div>

            <div class="card-body">
            <label for="">Landmark *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="type" name="plandmark" value="<?php echo $regist['plandmark'] ?>" id="plandmark" class="form-control" placeholder="Enter Landmark *">
            </div>
            </div>

            <div class="card-body">
            <label for="">Select State *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select" id="pstate" name="pstate" onchange="getDistricPar(this.value)" aria-label="Default select example">
            <option selected="">--- Select State ---</option>
            <?php foreach ($state as $st) { ?>
            <option value="<?php echo $st['id'] ?>" <?php echo ($st['id'] == $regist['pstate']) ? "selected" : "" ?>><?php echo $st['location']; ?></option>
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
            <?php if(empty($regist['pdistric'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($distr as $dis) { ?>
            <option value="<?php echo $dis['district_id'] ?>" <?php echo ($dis['district_id'] == $regist['pdis']) ? "selected" : "" ?>><?php echo $dis['district_name'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Select Police Station *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select" id="ppolice" name="ppolice" onchange="getpBlockPar(this.value)" aria-label="Default select example">
            <option selected="">--- Select Police Station ---</option>
            <?php if(empty($regist['ppolice'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($police as $polc) { ?>
            <option value="<?php echo $polc['police_id'] ?>" <?php echo ($polc['police_id'] == $regist['ppolc']) ? "selected" : "" ?>><?php echo $polc['police_name'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

             <div class="card-body">
            <label for="">Select Block *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select class="form-select" id="pblock" name="pblock" onchange="getPostOffPar(this.value)" aria-label="Default select example">
            <option selected="">--- Select Block ---</option>
            <?php if(empty($regist['pblock'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($block as $blck) { ?>
            <option value="<?php echo $blck['block_id'] ?>" <?php echo ($blck['block_id'] == $regist['pbloc']) ? "selected" : "" ?>><?php echo $blck['block_name'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Select Post Office *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select" id="ppost" name="ppost" onchange="getPinCodePar(this.value)" aria-label="Default select example">
            <option selected="">--- Select Post Office ---</option>
            <?php if(empty($regist['ppost'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($post as $pst) { ?>
            <option value="<?php echo $pst['post_id'] ?>" <?php echo ($pst['post_id'] == $regist['ppos']) ? "selected" : "" ?>><?php echo $pst['post_name'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>

            <div class="card-body">
            <label for="">Select Pin Code *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select class="form-select" id="ppin" name="ppin" aria-label="Default select example">
            <option selected="">--- Select Pin Code ---</option>
            <?php if(empty($regist['ppin'])) { ?>
            <option value=""></option>
            <?php } ?>
            <?php foreach($pin as $pn) { ?>
            <option value="<?php echo $pn['pin_id'] ?>" <?php echo ($pn['pin_id'] == $regist['ppn']) ? "selected" : "" ?>><?php echo $pn['pin_no'] ?></option>
            <?php } ?>
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
            <?php foreach ($sectr as $sec) { ?>
            <option value="<?php echo $sec['id'] ?>" <?php echo ($sec['id'] == $regist['sector']) ? "selected" : "" ?>><?php echo $sec['sector_name'] ?></option>
            <?php }  ?>    
            </select>
            </div>
            </div>
            </div>

            <?php if($regist['sector'] == 18) { ?> 
            <div class="col-md-6" id="business_type_section" style="display:none;">
            <div class="card-body">
            <label for="">Select Type Of Business *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select selItem" name="business_type" id="business_type" aria-label="Default select example">
            <option selected="">--- Select One ---</option>
            <?php foreach ($bussns as $bus) { ?>
            <option value="<?php echo $bus['id'] ?>" <?php echo ($bus['id'] == $regist['business_type']) ? "selected" : "" ?>><?php echo $bus['business_type'] ?></option>
            <?php } ?>
            </select>
            </div>
            </div>
            </div>
            <?php }?>

            <div class="col-md-6">
            <div class="card-body">
            <label for="">Select Industries *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <select class="form-select selItem" name="industries" id="industries" aria-label="Default select example">
            <option selected="">--- Select One ---</option>
            <?php foreach ($industers as $indus) { ?>
            <option value="<?php echo $indus['indus_id'] ?>" <?php echo ($indus['indus_id'] == $regist['industries']) ? "selected" : "" ?>><?php echo $indus['indus'] ?></option>
            <?php } ?>
            </select>
             </div>
            </div>
            </div>

            <div class="col-md-6" style="display:none;">
            <div class="card-body">
            <label for="">Business Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" class="form-control" value="<?php echo $regist['business_name'] ?>" name="business_name" id="business_name" placeholder="Enter Business Name">
            </div>
            </div>
            </div>

            <div class="col-md-6" id="registration_number_section" style="display:none;">
            <div class="card-body">
            <label for="">Registration Number *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" class="form-control" value="<?php echo $regist['registration_number'] ?>" name="registration_number" id="registration_number" placeholder="Enter Registration Name">
            </div>
            </div>
            </div>

            <div class="col-md-6" id="registered_address_section" style="display:none;">
            <div class="card-body">
            <label for="">Registered Address *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" class="form-control" value="<?php echo $regist['registration_address'] ?>" name="registration_address" id="registration_address" placeholder="Enter Registered Address">
            </div>
            </div>
            </div>

            <div class="col-md-6" id="email_section" style="display:none;">
            <div class="card-body">
            <label for="">Email Id *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="email" class="form-control" value="<?php echo $regist['mail'] ?>" name="mail" id="email" placeholder="Enter Email Id">
            </div>
            </div>
            </div>

            <div class="col-md-6" id="contact_section" style="display:none;">
            <div class="card-body">
            <label for="">Contact Number *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="number" class="form-control" value="<?php echo $regist['contact_no'] ?>" name="contact_no" id="contact_no" placeholder="Enter Contact Number">
            </div>
            </div>
            </div>

            <div class="col-md-6" id="photo_section" style="display:none;">
            <div class="card-body">
            <label for="">Photo *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="file" class="form-control" name="photo" id="photo" placeholder="Choose Photo">
            </div>
            </div>
            </div>


            <div class="col-md-12" id="city_section" style="display:none;">
            <div class="card-body">
            <label for="">Current City *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" class="form-control" name="city" id="city" value="<?php echo $regist['city'] ?>" placeholder="Enter City Name">
            </div>
            </div>
            </div>


            </div>





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
                $('#email_section').show('slow');
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
                               