
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
        @font-face {
            font-family: kruti dev;
            src: url("fonts/Kruti_Dev_010.ttf"), url("fonts/Kruti_Dev_010.eot");
        }
    </style>
   <?php $this->load->view('website/include/css'); ?>
</head>

<body>

<?php $this->load->view('website/include/header'); ?>

    <div class="header-height"></div>


    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider" style="height:300px;">
                <img src="<?php echo base_url();?>themes/img/about-image-1.jpg" alt title="#slider-caption-1" />
           
            </div>
            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation leFadeInRight sequence font-phi">B 2 B</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s" style="line-height:2; color:white;">Help
                                    today because
                                    tomorrow you may be the one who needs helping! <br>Forget what you can get and see
                                    what you can give.
                                </p>
                                <a href="<?php echo base_url();?>site/index" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Home</a>
                                <a href="javaScript:void(0);" class="default-btn wow cssanimation fadeInBottom"
                                    data-wow-delay="0.8s">B2B</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                                    Farmer becomes
                                    bussinessman</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s" style="line-height:2;">Help
                                    today because
                                    tomorrow you may be the one who needs helping! <br>Forget what you can get and see
                                    what you can give.
                                </p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                    With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom"
                                    data-wow-delay="0.8s">Donet Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s"
                                    style="line-height:2;">
                                    Farmer becomes bussinessman</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow
                                    you may be the one
                                    who needs helping! <br>Forget what you can get and see what you can give.</p>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join
                                    With Us</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom"
                                    data-wow-delay="0.8s">Donet Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section>
<div class="container" style="padding-top:65px;">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;padding:20px;background-color:#288528; color:white; border-radius: 10px;">List of Entrepreneur</h2>
        </div>
    </div>
</div>
</section>


<section class="form-section">
    <div class="container" style="border: 1px dashed #009000; margin-top:10px; margin-bottom: 55px; padding: 0px 80px 30px 80px;border-radius: 10px;">


    <div class="container" style="margin-top:66px;">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Village/City</th>
                        <th>State/District</th>

                    </tr>
                     <?php foreach($regData as $r => $reg):?>
                        <tr>
                            <td><?php echo $r + 1 ?></td>
                            <td><?php echo $reg['name'];?></td>
                            <td><?php echo $reg['email'];?></td>
                            <td><?php echo $reg['mobile'];?></td>
                            <td><?php echo $reg['registration_address'];?></td>
                            <td><?php echo $reg['sta_con_name'];?></td>
                        </tr>
                        <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>

    </div>
</section>







<?php $this->load->view('website/include/footer'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        <?php $this->load->view('website/include/js'); ?>
</body>

</html>