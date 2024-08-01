<?php //echo "<pre>";print_r($editAData);die;?>

<div class="col-md-6">
<div class="card-body pt-2 pb-2">
<label for="">Name *</label>
<div class="input-group">
<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
<input type="hidden" name="id" id="id" value="<?php echo $editAData['id'];?>" class="form-control" placeholder="Enter Name ">
<input type="text" name="m_name" id="m_name" value="<?php echo $editAData['m_name'];?>" class="form-control" placeholder="Enter Name ">
</div>
</div>
</div>
<div class="col-md-6">
<div class="card-body pt-2 pb-2">
<label for="">Email *</label>
<div class="input-group">
<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
<input type="email" name="m_email" id="m_email" value="<?php echo $editAData['m_email'];?>" class="form-control" placeholder="Enter Email Id">
</div>
</div>
</div>
<div class="col-md-6">
<div class="card-body pt-2 pb-2">
<label for="">Password *</label>
<div class="input-group">
<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
<input type="email" name="	m_password" id="	m_password" value="<?php echo $editAData['m_password'];?>" class="form-control" placeholder="Enter Email Id">
</div>
</div>
</div>
<div class="col-md-6">
<div class="card-body pt-2 pb-2">
<label for="">Mobile Number *</label>
<div class="input-group">
<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
<input type="text" name="m_mobile" value="<?php echo $editAData['m_mobile'];?>" id="m_mobile" class="form-control" placeholder="Enter Mobiel Number">
</div>
</div>
</div>
<div class="col-md-6">
<div class="card-body pt-2 pb-2">
<label for="">Date Of Birth *</label>
<div class="input-group">
<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
<input type="date" name="m_dob" value="<?php echo $editAData['m_dob'];?>" id="m_dob" class="form-control" placeholder="Enter Date Of Birth">
</div>
</div>
</div>
<div class="col-md-6">
<div class="card-body pt-2 pb-2">
<label for="">Designation *</label>
<div class="input-group">
<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
<input type="text" name="m_designation" value="<?php echo $editAData['m_designation'];?>" id="m_designation" class="form-control" placeholder="Enter Designation">
</div>
</div>
</div>
<div class="col-md-6">
<div class="card-body pt-2 pb-2">
<label for="">Address *</label>
<div class="input-group">
<span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
<input type="text" name="m_address" value="<?php echo $editAData['m_address'];?>" id="m_address" class="form-control" placeholder="Enter Address">
</div>
</div>
</div>