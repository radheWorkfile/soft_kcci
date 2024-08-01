<!-- fou_email    fou_mobile   fou_dob    fou_designation   fou_address     founder_post    photo -->


<div class="row">


    <div class="col-md-6">
    <p style="color:#1553a3;"><span> Name</span><span class="float-end"><?php  echo $viewDAta['founder_name'];?>&nbsp;&nbsp;</span></p><hr>
    <p style="color:#1553a3;"><span> Email</span><span class="float-end"><?php  echo $viewDAta['fou_email'];?></span></p><hr>
    <p style="color:#1553a3;"><span> Mobile</span><span class="float-end"><?php  echo $viewDAta['fou_mobile'];?></span></p><hr>
    
</div>

<div class="col-md-6">
    <p style="color:#1553a3;"><span>Des</span><span class="float-end"><?php  echo $viewDAta['fou_designation'];?>&nbsp;&nbsp;</span></p><hr>
    <p style="color:#1553a3;"><span> Address </span><span class="float-end"><?php  echo $viewDAta['fou_address'];?></span></p><hr>
    <p style="color:#1553a3;"><span> Date of Birth </span><span class="float-end"><?php  echo $viewDAta['fou_dob'];?></span></p><hr>
 
    </div>
    <p style="text-align:center;"><img src="<?php  echo base_url()."uploads/founder_img/".$viewDAta['photo'];;?>" alt="" style="height:10rem;width:15rem;"></p>
    <p style="color:#1553a3;text-align:center;"><span><?php  echo $viewDAta['created_at'];?></span></p>




</div>