
    
    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                <div class="col-8 col-sm-6 col-md-8 col-lg-8">
                 <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                   <a href="<?php echo base_url();?>Site/index"> <img src="<?php echo base_url();?>themes/logo-1.jpg" alt="logo of kcci" title="kcci logo" class="heaFirImgMan" ></a>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6" style="padding-left:2rem;">
                    <img src="<?php echo base_url();?>themes/logo.jpg" alt="" class="heaSecImgMan">

                    </div>
                 </div>  
                </div>
                    <div class="col-sm-4 d-none d-md-block" style="position: absolute; left: 63rem;">
                    <ul class="left-info">
                            <li style="font-size:2rem;"><a href="#"><i class="ti-email"></i>kicciindia@gmail.com</a>
                            </li>
                            <li style="font-size:2rem;"><a href="#"><i class="ti-mobile"></i>+91 9028388889</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header headerMan">
            <div class="container">
                <div class="bottom-content-wrap row">
                  
                    <div class="col-sm-10 text-right" style="">
                    <div class="site-branding">
                        </div>
                        <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li class="active"> <a href="<?php echo base_url();?>Site/index">Home</a> </li>
                             
                           
                            <li><a href="<?php echo base_url();?>Site/about">About KCCI</a></li>
                            <li><a href="javaScript:void(0);">Kisan</a></li>
                            <li><a href="<?php echo base_url();?>Site/startup">Start Up</a></li>
                            <li><a href="javaScript:void(0);">Business</a></li>
                            <li><a href="<?php echo base_url();?>Site/b2b">B2B </a></li>
                            <li><a href="<?php echo base_url();?>Site/event_gallery"> Event Gallery</a></li>
                            <li><a href="<?php echo base_url();?>Site/team">Team</a></li>
                            <li> <a href="<?php echo base_url();?>Site/contact">Contact</a></li>
                            <li><a href="<?php echo base_url();?>Site/chapters">Chapters</a></li>
                    
                        </ul>
                      
                    </div>
                    <div class="col-sm-2 text-right">
                    <a href="<?php echo base_url();?>Login" class="default-btn ">Login</a>

                    </div>
                 
                </div>
            </div>
        </div>  

         <section class="mobHeaMan">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p><span class="mobMenuMan" id="MobMenuManForAn"><img src="<?php echo base_url();?>themes/menu_1.png" class="menuImgM" alt=""></span></p>
                <div class="" id="mEnU" style="padding:0.6rem;width:50%;margin-top:1.8rem;display:none;">
                <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li class="active liMan"> <a href="<?php echo base_url();?>Site/index">Home</a> </li>
                            <li class="liMan"><a href="<?php echo base_url();?>Site/about">About KCCI</a></li><br>
                            <li class="liMan"><a href="javaScript:void(0);">StartUp</a></li><br>
                            <li class="liMan"><a href="javaScript:void(0);">Business</a></li><br>
                            <li class="liMan"><a href="<?php echo base_url();?>Site/event_gallery"> Event Gallery</a></li><br>
                            <li class="liMan"> <a href="<?php echo base_url();?>Site/contact">Contact</a></li><br>
                            <li class="liMan"><a href="<?php echo base_url();?>Site/sign_up">Sign Up</a></li><br>
                            <li class="liMan"><a href="<?php echo base_url();?>Login">Login</a></li>
                    
                        </ul>
              </div>
              </div>
            </div>
          </div>
         </section>
    </header>

 





<!-- Modal -->
<div class="modal fade" id="founder_member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="founder_member">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

        <span> <img src="<?php echo base_url();?>themes/image/founder-mem-1.jpg" id="setImg" style="height: 150px; width: 150px; border-radius: 20px; "></span> 
        <span id="setname" style="padding-left:60px;"></span> 
         <p id="setfounder" style="padding-top:30px;"></p>
         <p id="setcontent" style="padding-top:10px;"></p>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<script>
  // MobMenuManForAn  mEnU
  $(document).ready(function(){
  $("#MobMenuManForAn").on("click",function(){
    $("#mEnU").css("background-color", "#057c05");
  });
  $("#MobMenuManForAn").click(function(){
    $("#mEnU").toggle();
  });

});
</script>












