            <style>
                .imgMan{border:4px solid #d2d2d2;height:3.5rem;width:6rem;margin-top:1.6rem;}
            </style>
            
            <div class="col-md-6">
            <div class="card-body pt-2 pb-2">
            <label for="">Name *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="hidden" name="id" id="id" value="<?php echo $founderName['id'];?>" class="form-control" placeholder="Enter Name">
            <input type="text" name="founder_name" id="founder_name" value="<?php echo $founderName['founder_name'];?>" class="form-control" placeholder="Enter Name">
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card-body pt-2 pb-2">
            <label for="">Email *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="email" name="fou_email" id="fou_email" value="<?php echo $founderName['fou_email'];?>" class="form-control" placeholder="Enter Email Id">
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card-body pt-2 pb-2">
            <label for="">Mobile Number *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="fou_mobile" id="fou_mobile" value="<?php echo $founderName['fou_mobile'];?>" class="form-control" placeholder="Enter Mobiel Number">
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card-body pt-2 pb-2">
            <label for="">Date Of Birth *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="date" name="fou_dob" id="fou_dob" value="<?php echo $founderName['fou_dob'];?>" class="form-control" placeholder="Enter Date Of Birth">
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card-body pt-2 pb-2">
            <label for="">Designation *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="fou_designation" value="<?php echo $founderName['fou_designation'];?>" id="fou_designation" class="form-control" placeholder="Enter Designation">
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card-body pt-2 pb-2">
            <label for="">Address *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="text" name="fou_address"  value="<?php echo $founderName['fou_address'];?>" id="fou_address" class="form-control" placeholder="Enter Address">
            </div>
            </div>
            </div>


            <div class="col-md-8" style="margin-top:0.5rem;margin-bottom:2rem;">
            <div class="card-body">
            <label for="">Photo *</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
            <input type="file" name="photo" id="photo" value="" class="form-control" placeholder="Choose Your File">
            </div>
            </div>
            </div>
            <div class="col-md-3">
                <p><img src="<?php echo base_url()."uploads/founder_img/".$founderName['photo'];;?>" alt="" class="imgMan"></p>
            </div>
                                 
