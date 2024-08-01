

    <style>
 .allRowMan{background-color:#e2e2e2;padding-top:1rem;padding-bottom:3rem;border-radius:0.5rem;margin:0.5rem 0.1rem 0.5rem 0.1rem;}
 .perHeaMan{padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;}
 .perHeaManSpan{border-bottom:2px solid #245fae;}

    </style>


            <div class="row allRowMan" id="editDetails">
            <!-- --------------------------- Personal Details Start  ---------------------- -->         
            <h3 class="text-primary perHeaMan">Pe<span class="perHeaManSpan">rsonal Details</span> </h1>
            <!-- <div class="col-md-12" id="errResultMsg">Message will display</div> -->

            <div class="col-md-6">
            <div class="card-body">

            <label for="" class="p-1">Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="hidden" name="created_by_user_type_id" id="created_by_user_type_id" value="<?php echo $this->session->userdata('user_ids');?>" class="form-control" placeholder="Enter Full Name">
            <input type="hidden" name="id" id="id" value="<?php echo $regist['id'] ?>" class="form-control" placeholder="Enter Full Name">
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $regist['name'] ?>" placeholder="Enter Full Name">
            </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="card-body">
            <label for="" class="p-1">Father Name *</label>
            <div class="input-group">   
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="father_name" id="father_name" value="<?php echo $regist['father_name'] ?>" class="form-control" placeholder="Enter Father Name">
            </div>
            </div>
            </div>  

            <div class="col-md-6">
            <div class="card-body">
             <label for="" class="p-1">Date Of Birth *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="date" name="dob" id="dob" value="<?php echo $regist['dob'] ?>" class="form-control" placeholder="Enter Date Of Birth *">
            </div>
            </div>
            </div>

         

            <div class="col-md-6">
            <div class="card-body">
            <label for="" class="p-1">Caste *</label>
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
            <label for="" class="p-1">Sub-Caste *</label>
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
            <label class="p-1" for="">Password *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="password" id="password" value="<?php echo $regist['password'] ?>" class="form-control" placeholder="Enter Community Name *">
            </div>
            </div>
            </div>


            <div class="col-md-6">
            <div class="card-body">
            <label for="" class="p-1">User Type *</label>
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

            <div class="col-md-6" id="">
            <div class="card-body">
            <label class="p-1" for="">Married / Unmarried*</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select class="form-select" name="married" id="married" aria-label="Default select example">
            <option selected="">--- Select One ---</option>
            <option value="1">Married</option>
            <option value="2">Unmarried </option>
            </select>
            </div>
            </div>
            </div>

            </div>

            <!-- ========================================================  -->
            <div class="row allRowMan marrDet">
                <h3 class="text-primary perHeaMan">M<span class="perHeaManSpan">arried Details</span> </h1>
            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter  Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="w_name" id="w_name" value="<?php echo $regist['w_name'] ?>" class="form-control" placeholder="Enter Name">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter DOB *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="date" name="w_dob" id="w_dob" value="<?php echo $regist['w_dob'] ?>" class="form-control" placeholder="Enter Dob ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Address *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="w_address" value="<?php echo $regist['w_address'] ?>" id="w_address" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Mobile No *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="number" name="w_mobile_no" value="<?php echo $regist['w_mobile_no'] ?>" id="w_mobile_no" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label  class="p-1" for=""> Occupation *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="w_occupation" id="w_occupation" value="<?php echo $regist['w_occupation'] ?>" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label  class="p-1" for="">Enter Child Name*</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-plus-circle-dotted" id="AddChild"></i></span>
                <input type="text" name="w_child" id="w_child" class="form-control" placeholder="Enter Child Name ">
                <span class="input-group-text"><i class="bi bi-trash rmvMiChild"  ></i></span>
            </div>
            </div>
            </div>
             <div class="row" id="miAddNoChild">

            

            </div>


            </div>
            <!-- ========================= Father Details section start ===============================  -->
         
            <div class="row allRowMan fatDetMan">
            <h3 class="text-primary perHeaMan">F<span class="perHeaManSpan">ather's Details</span> </h1>
            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter  Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="f_name" id="f_name" value="<?php echo $regist['f_name'] ?>" class="form-control" placeholder="Enter Father Name">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter DOB *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="date" name="f_dob" value="<?php echo $regist['f_dob'] ?>" id="f_dob" class="form-control" placeholder="Enter Dob ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Address *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="f_address" value="<?php echo $regist['f_address'] ?>" id="f_address" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Mobile No *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="number" name="f_mobile_no" value="<?php echo $regist['f_mobile_no'] ?>" id="f_mobile_no" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for=""> Occupation *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="f_occupation" value="<?php echo $regist['f_occupation'] ?>" id="f_occupation" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter Child Name*</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-plus-circle-dotted" id="AddChild"></i></span>
                <input type="text" name="child_name1" id="child_name1" class="form-control" placeholder="Enter Child Name ">
                <span class="input-group-text"><i class="bi bi-trash rmvMiChild"  ></i></span>
            </div>
            </div>
            </div>
            </div>
            <!-- ========================= Father Details section end ===============================  -->


            <!-- ==============================  Grand Father Detials section start ==============================  -->
            <div class="row allRowMan fatDetMan">
            <h3 class="text-primary perHeaMan">G<span class="perHeaManSpan">rand Father Details</span> </h1>
            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter  Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="grand_father" value="<?php echo $regist['grand_father'] ?>" id="grand_father" value="<?php echo $regist['grand_father'] ?>" class="form-control" placeholder="Enter Grand Father Name ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter DOB *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="date" name="gf_dob" value="<?php echo $regist['gf_dob'] ?>" id="gf_dob" class="form-control" placeholder="Enter Dob ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Address *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="gf_address" value="<?php echo $regist['gf_address'] ?>" id="gf_address" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Mobile No *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="number" value="<?php echo $regist['gf_mobile_no'] ?>" name="gf_mobile_no" id="w_mobile_no" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Occupation *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="gf_occupation" id="w_occupation" value="<?php echo $regist['gf_occupation'] ?>" class="form-control" placeholder="Enter Address ">
            </div>
            </div></div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Enter Child Name*</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-plus-circle-dotted" id="AddChild"></i></span>
                <input type="text" name="child_name1" id="child_name1" class="form-control" placeholder="Enter Child Name ">
                <span class="input-group-text"><i class="bi bi-trash rmvMiChild"  ></i></span>
            </div>
            </div>
            </div>
            </div>
            <!-- ==============================  Grand Father Detials section end ==============================  -->



            <!-- ==============================  Contact Section start ==============================  -->
            <div class="row allRowMan">
            <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Co<span style="border-bottom:2px solid #245fae;">ntact Details</span> </h1>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Mobile Number*</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="number" name="mobile" id="mobile" class="form-control" value="<?php echo $regist['mobile'] ?>" placeholder="Enter Mobile Number *">
            </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Email Id *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="email" id="email" name="email" value="<?php echo $regist['email'] ?>" class="form-control" placeholder="Enter Valid Email Id *">
            </div>
            </div>
            </div>
            </div>
            <!-- ==============================  Contact Section end ==============================  -->
     
           
            <div class="row allRowMan">
            <!-- --------------------------- address section start -----------------------------  -->
            <div class="col-md-6">
            <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Te<span style="border-bottom:2px solid #245fae;">mporary Address </span> </h1>

            <div class="card-body">
            <label class="p-1" for="">Village / City *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="type" name="tvillage" value="<?php echo $regist['tvillage'] ?>" id="tvillage" class="form-control" placeholder="Enter Village Name *">
            </div>
            </div>

            <div class="card-body">
            <label class="p-1" for="">Bulding / House Number *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="type" class="form-control"  value="<?php echo $regist['tbulding'] ?>" name="tbulding" id="tbulding" placeholder="Enter House Number *">
            </div>
            </div>

            <div class="card-body">
            <label class="p-1" for="">Landmark *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="type" name="tlandmark" value="<?php echo $regist['tlandmark'] ?>" id="tlandmark" class="form-control" placeholder="Enter Landmark *">
            </div>
             </div>

            <div class="card-body">
            <label class="p-1" for="">Select State *</label>
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
            <label class="p-1" for="">Selct Distric *</label>
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
            <label class="p-1" for="">Select Police Station *</label>
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
            <label class="p-1" for="">Select Block *</label>
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
            <label class="p-1" for="">Select Post Office *</label>
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
            <label class="p-1" for="">Select Pin Code *</label>
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
            <label class="p-1" for="">Village / City *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="type" name="pvillage" value="<?php echo $regist['pvillage'] ?>" id="pvillage" class="form-control" placeholder="Enter Village Name *">
            </div>
            </div>

            <div class="card-body">
            <label class="p-1" for="">Bulding / House Number *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="type" class="form-control" value="<?php echo $regist['pbulding'] ?>" name="pbulding" id="pbulding" placeholder="Enter House Number *">
            </div>
            </div>

            <div class="card-body">
            <label class="p-1" for="">Landmark *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input type="type" name="plandmark" value="<?php echo $regist['plandmark'] ?>" id="plandmark" class="form-control" placeholder="Enter Landmark *">
            </div>
            </div>

            <div class="card-body">
            <label class="p-1" for="">Select State *</label>
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
            <label class="p-1" for="">Selct Distric *</label>
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
            <label class="p-1" for="">Select Police Station *</label>
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
            <label class="p-1" for="">Select Block *</label>
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
            <label class="p-1" for="">Select Post Office *</label>
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
            <label class="p-1" for="">Select Pin Code *</label>
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
            </div>

            <div class="row allRowMan">
            <!-- --------------------------- Occupation Details details start   ---------------------- -->
            <h3 class="text-primary" style="padding-left:2rem;margin-top:1rem;margin-bottom:-1rem;margin-bottom:0.5rem;">Oc<span style="border-bottom:2px solid #245fae;">cupation Details</span> </h1>

            <!-- test  -->
            <div class="col-md-6">
            <div class="card-body">
            <label class="p-1" for="">Select Sector *</label>
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
            <div class="col-md-6" >
            <div class="card-body">
            <label class="p-1" for="">Select Type Of Business *</label>
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
            <label class="p-1" for="">Select Industries *</label>
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

            <div class="col-md-6" id="business_name" style="display:none;">
            <div class="card-body">
            <label class="p-1" for="">Business Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" class="form-control" value="<?php echo $regist['business_name'] ?>" name="business_name" id="business_name" placeholder="Enter Business Name">
            </div>
            </div>
            </div>


            <div class="col-md-12" id="city_section" style="display:none;">
            <div class="card-body">
            <label class="p-1" for="">Current City *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" class="form-control" name="city" id="city" value="<?php echo $regist['city'] ?>" placeholder="Enter City Name">
            </div>
            </div>
            </div>

            </div>



            <script>
    $(function(){
    $(document).ready(function() {  
  
    $("#AddChild").on("click",function(){
        // $("#miAddNoChild").append('<div class="col-md-6"><div class="card-body"><label for="">Enter Child Name*</label><div class="input-group"><span class="input-group-text"><i class="bi bi-link-45deg"></i></span><input type="text" name="w_child[]"  class="form-control" placeholder="Enter Child Name "></div></div></div>');  
        $("#miAddNoChild").append('<div class="col-md-4"> <div class="card-body"><label for="">Enter Child Name*</label> <div class="input-group"><span class="input-group-text"><i class="bi bi-link-45deg"></i></span><input type="text" name="w_child[]"  class="form-control" placeholder="Enter Name "></div> </div></div><div class="col-md-4"><div class="card-body"><label for="">Enter Dob*</label><div class="input-group"><span class="input-group-text"><i class="bi bi-link-45deg"></i></span><input type="text" name="w_child_dob[]"  class="form-control" placeholder="Enter Dob "> </div> </div> </div><div class="col-md-4"> <div class="card-body"><label for="">Enter profession *</label><div class="input-group"><span class="input-group-text"><i class="bi bi-link-45deg"></i></span><input type="text" name="w_child_occ[]"  class="form-control" placeholder="Enter Profession"> </div> </div></div>');  
    });
    
    $(".rmvMiChild").on("click",function(){
    $("#miAddNoChild").children().last().remove();  
  
        });  
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
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);               
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
