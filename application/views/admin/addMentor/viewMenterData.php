<!-- fou_email    fou_mobile   fou_dob    fou_designation   fou_address     founder_post    photo -->
<style>
    .imgMen{text-align:center}.imgMenMen{height:4rem!important;}


</style>

<div class="row"> 
    <div class="col-md-6">
    <p style="color:#1553a3;"><span class="text-success"> Name</span><span class="float-end"><?php  echo $viewDAta['m_name'];?>&nbsp;&nbsp;</span></p><hr>
    <p style="color:#1553a3;"><span class="text-success"> Email</span><span class="float-end"><?php  echo $viewDAta['m_email'];?></span></p><hr>
    <p style="color:#1553a3;"><span class="text-success"> Mobile</span><span class="float-end"><?php  echo $viewDAta['m_mobile'];?></span></p><hr>
    
</div>

<div class="col-md-6">
    <p style="color:#1553a3;"><span class="text-success">Des</span><span class="float-end"><?php  echo $viewDAta['m_designation'];?>&nbsp;&nbsp;</span></p><hr>
    <p style="color:#1553a3;"><span class="text-success"> Address </span><span class="float-end"><?php  echo $viewDAta['m_designation'];?></span></p><hr>
    <p style="color:#1553a3;"><span class="text-success"> Date of Birth </span><span class="float-end"><?php  echo $viewDAta['m_address'];?></span></p><hr>
 
    </div>
    <p class="imgMen"><img src="<?php echo base_url()."uploads/mentor_img/".$viewDAta['photo'];?>" alt="" class="imgMenMen"></p>
    <p style="color:#1553a3;text-align:center;"><span><?php  echo $viewDAta['created_at'];?></span></p>




</div>