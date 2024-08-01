<style>
  .viewTexM{text-align:center;color:green;border-bottom:1px solid red;}.texcol{color:#1553a3;}
  .borMa{border-bottom:1px solid #d2d2d2;padding-bottom:0.8rem;}
  .heaTexman{text-align:center;color:#123456;text-decoration: underline;}
  .firTexMan{padding:2rem 3rem;} .midTexConMan{width:50%;display:inline-block;}
  .texManNa{color:#123456;font-weight:800;}
  .lasTexConMan{width:48%;display:inline-block;}  
  .lasTexMan{color:red;font-weight:600;}
  .tabBorMan{border:2px solid white;}
</style>

<h3 class="heaTexman">Personal Details</h3>
<div class="row mt-5">
  <div class="col-md-6"><div class="row"> <div class="col-md-2"></div><div class="col-md-4 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Name</div> <div class="col-md-6 lasTexMan"><?php echo $regis['name'];?></div></div></div>
  <div class="col-md-6"><div class="row"><div class="col-md-5 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Father Name</div><div class="col-md-7 lasTexMan"><?php echo $regis['father_name'];?></div></div></div>
</div>
<div class="row mt-2">
  <div class="col-md-6"><div class="row"> <div class="col-md-2"></div><div class="col-md-4 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Email Id </div> <div class="col-md-6 lasTexMan"><?php echo $regis['email'];?></div></div></div>
  <div class="col-md-6"><div class="row"><div class="col-md-5 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Password</div><div class="col-md-7 lasTexMan"><?php echo $regis['password'];?></div></div></div>
</div>
<div class="row mt-2">
<div class="col-md-6"><div class="row"> <div class="col-md-2"></div><div class="col-md-4 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Hig Qua</div> <div class="col-md-6 lasTexMan"><?php echo $regis['p_h_qualification'];?></div></div></div>
  <div class="col-md-6"><div class="row"><div class="col-md-5 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Date Of Birth</div><div class="col-md-7 lasTexMan"><?php echo $regis['dob'];?></div></div></div>
</div>
<div class="row mt-2">
  <div class="col-md-6"><div class="row"> <div class="col-md-2"></div><div class="col-md-4 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> State/Cou</div> <div class="col-md-6 lasTexMan"><?php echo $regis['sta_con_name'];?></div></div></div>
  <div class="col-md-6"><div class="row"><div class="col-md-5 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> District</div><div class="col-md-7 lasTexMan"><?php echo $regis['temporary_distric'];?></div></div></div>
</div>
<div class="row mt-2">
  <div class="col-md-6"><div class="row"> <div class="col-md-2"></div><div class="col-md-4 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Vill /City</div> <div class="col-md-6 lasTexMan"><?php echo $regis['pvillage'];?></div></div></div>
  <div class="col-md-6"><div class="row"><div class="col-md-5 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Town Name</div><div class="col-md-7 lasTexMan"><?php echo $regis['town_name'];?></div></div></div>
</div>
<div class="row mt-2">
  <div class="col-md-6"><div class="row"> <div class="col-md-2"></div><div class="col-md-4 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Bus Type</div> <div class="col-md-6 lasTexMan"><?php echo $regis['bus_typ'];?></div></div></div>
  <div class="col-md-6"><div class="row"><div class="col-md-5 texManNa"><i class="fa-solid fa-diamond-turn-right"></i> Bus Name</div><div class="col-md-7 lasTexMan"><?php echo $regis['bus_name'];?></div></div></div>
</div>






