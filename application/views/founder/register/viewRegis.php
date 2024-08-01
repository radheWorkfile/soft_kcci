<style>
  .viewTexM{text-align:center;color:green;}.texcol{color:#1553a3;}
  .borMa{border-bottom:1px solid #d2d2d2;padding-bottom:0.8rem;}
</style>


<div class="row">
  <div class="col-md-6">
    <p class="viewTexM">Personal Details</p><hr>
    <p class="borMa"><span class="texcol">Name</span><span  class="float-end texcol"><?php echo $regis['name'];?></span></p>
    <p class="borMa"><span class="texcol">Father Name</span><span  class="float-end texcol"><?php echo $regis['father_name'];?></span></p>
    <p class="borMa"><span class="texcol">Grand Father Name</span><span  class="float-end texcol"><?php echo $regis['grand_father'];?></span></p>
    <p class="borMa"><span class="texcol">Date Of Birth</span><span  class="float-end texcol"><?php echo $regis['dob'];?></span></p>
    <p class="borMa"><span class="texcol">Caste</span><span  class="float-end texcol"><?php echo $regis['caste'];?></span></p>
    <p class="borMa"><span class="texcol">Sub Caste</span><span  class="float-end texcol"><?php echo $regis['sub-caste'];?></span></p>
    <p class="borMa"><span class="texcol">Community</span><span  class="float-end texcol"><?php echo $regis['community'];?></span></p>
    <p class="borMa"><span class="texcol">User Type</span><span  class="float-end texcol"><?php echo $regis['user_type'];?></span></p>
  </div>
 
  <div class="col-md-6">
    <p class="viewTexM">Occupation Details</p><hr>
    <p class="borMa"><span class="texcol">Business Type</span><span  class="float-end texcol"><?php echo $regis['bus_typ'];?></span></p>
    <p class="borMa"><span class="texcol">Industries </span><span  class="float-end texcol"><?php echo $regis['indus'];?></span></p>
    <p class="borMa"><span class="texcol">Business Name</span><span  class="float-end texcol"><?php echo $regis['business_name'];?></span></p>
    <p class="borMa"><span class="texcol">Registration_number</span><span  class="float-end texcol"><?php echo $regis['registration_number'];?></span></p>
    <p class="borMa"><span class="texcol">Registration Address </span><span  class="float-end texcol"><?php echo $regis['registration_address'];?></span></p>
    <p class="borMa"><span class="texcol">Email </span><span  class="float-end texcol"><?php echo $regis['email'];?></span></p>
    <p class="borMa"><span class="texcol">Contact No </span><span  class="float-end texcol"><?php echo $regis['contact_no'];?></span></p>
    <p class="borMa"><span class="texcol">Password</span><span  class="float-end texcol"><?php echo $regis['password'];?></span></p>

    

  </div>

</div>

<div class="row">
<p class="viewTexM"><span style="border-bottom:1px solid green;">Contact Details</span></p><hr>
<div class="col-md-6">
<p class="borMa"><span class="texcol">Mobile No</span><span  class="float-end texcol"><?php echo $regis['mobile'];?></span></p>
</div>
<div class="col-md-6">
<p class="borMa"><span class="texcol">Email</span><span  class="float-end texcol"><?php echo $regis['email'];?></span></p>
</div>
</div>


<div class="row">
<div class="col-md-6">
    <p class="viewTexM">Temporary Address</p><hr>
<p class="borMa"><span class="texcol">Village</span><span  class="float-end texcol"><?php echo $regis['tvillage'];?></span></p>
<p class="borMa"><span class="texcol">House</span><span  class="float-end texcol"><?php echo $regis['tbulding'];?></span></p>
<p class="borMa"><span class="texcol">Landmark</span><span  class="float-end texcol"><?php echo $regis['tlandmark'];?></span></p>
<p class="borMa"><span class="texcol">State</span><span  class="float-end texcol"><?php echo $regis['temporary_state'];?></span></p>
<p class="borMa"><span class="texcol">Distric</span><span  class="float-end texcol"><?php echo $regis['temporary_distric'];?></span></p>
<p class="borMa"><span class="texcol">Police</span><span  class="float-end texcol"><?php echo $regis['temporary_police_station'];?></span></p>
<p class="borMa"><span class="texcol">Block</span><span  class="float-end texcol"><?php echo $regis['temporary_block_office'];?></span></p>
<p class="borMa"><span class="texcol">Post</span><span  class="float-end texcol"><?php echo $regis['temporary_post_office'];?></span></p>
<p class="borMa"><span class="texcol">Pin</span><span  class="float-end texcol"><?php echo $regis['temporary_pin_code'];?></span></p>

  </div>
  <div class="col-md-6">
    <p class="viewTexM">Permanent Address</p><hr>
    <p class="borMa"><span class="texcol">Village</span><span  class="float-end texcol"><?php echo $regis['pvillage'];?></span></p>
<p class="borMa"><span class="texcol">House</span><span  class="float-end texcol"><?php echo $regis['pbulding'];?></span></p>
<p class="borMa"><span class="texcol">Landmark</span><span  class="float-end texcol"><?php echo $regis['plandmark'];?></span></p>
<p class="borMa"><span class="texcol">State</span><span  class="float-end texcol"><?php echo $regis['parmanent_state'];?></span></p>
<p class="borMa"><span class="texcol">Distric</span><span  class="float-end texcol"><?php echo $regis['parmanent_distric'];?></span></p>
<p class="borMa"><span class="texcol">Police</span><span  class="float-end texcol"><?php echo $regis['parmanent_police_station'];?></span></p>
<p class="borMa"><span class="texcol">Block</span><span  class="float-end texcol"><?php echo $regis['parmanent_block_office'];?></span></p>
<p class="borMa"><span class="texcol">Post</span><span  class="float-end texcol"><?php echo $regis['parmanent_post_office'];?></span></p>
<p class="borMa"><span class="texcol">Pin</span><span  class="float-end texcol"><?php echo $regis['parmanent_pin_code'];?></span></p>

  </div>
</div>