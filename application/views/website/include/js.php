<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>


<!-- <script src="<?php echo base_url();?>themes/js/vendor/bootstrap.min.js"></script> -->

<!-- <script src="<?php echo base_url();?>themes/js/vendor/tether.min.js"></script> -->

<!-- <script src="<?php echo base_url();?>themes/js/vendor/imagesloaded.pkgd.min.js"></script> -->




<!-- <script src="<?php echo base_url();?>themes/js/vendor/jquery.isotope.v3.0.2.js"></script> -->

<!-- <script src="<?php echo base_url();?>themes/js/vendor/smooth-scroll.min.js"></script> -->




<!-- <script src="<?php echo base_url();?>themes/js/vendor/venobox.min.js"></script> -->

<!-- <script src="<?php echo base_url();?>themes/js/vendor/jquery.ajaxchimp.min.js"></script> -->

<!-- <script src="<?php echo base_url();?>themes/js/vendor/jquery.counterup.min.js"></script> -->

<!-- <script src="<?php echo base_url();?>themes/js/vendor/jquery.waypoints.v2.0.3.min.js"></script> -->
<!--  -->
<script src="<?php echo base_url();?>themes/js/vendor/jquery.slicknav.min.js"></script>

<script src="<?php echo base_url();?>themes/js/vendor/jquery.nivo.slider.pack.js"></script>

<!-- <script src="<?php echo base_url();?>themes/js/vendor/letteranimation.min.js"></script> -->

<script src="<?php echo base_url();?>themes/js/vendor/wow.min.js"></script>

<script src="<?php echo base_url();?>themes/js/contact.js"></script>

<script src="<?php echo base_url();?>themes/js/main.js"></script>





<script>
    $(document).ready(function(){
        $(".radheActn").click(function(){
            
            let imgurl = '<?php echo base_url();?>themes/image/';
            const image = ["","founder-mem-1.jpg", "founder-mem-3.jpg","founder-mem-4.jpg","founder-mem-5.jpg","founder-mem-6.jpg","founder-mem-7.jpg","founder-mem-8.jpg","founder-mem-9.jpg","founder-mem-10.jpg","founder-mem-11.jpg","founder-mem-12.jpg","founder-mem-13.jpg"];
             // const name = ["","#name_1"];
            const founder = ["","Founder"];
            const content = [""
            ,"Business: Managing Director of (1)- BLPS PRIVATE LIMITED Architecture, Design & Consultancy for all services. 35 years of Electrical Engineering experience. (2)- Noida Dhatu Pvt Ltd. Manufacturing Unit of PVC Pipes. (3)- RN Creations Pvt. Ltd. Manufacturing Unit of Garments.","Harish Chandra Roy is well known manufacturer, importer, supplier and trader. He is dealing in many products like Fabric & Fabric Pads, Polyfil (Wadding), Bra Pad, Foam Pad, Leather and Cotton Garment and many more. His office is at Noida, Uttar Pradesh, India."
             ,"An eminent Lawyer in the Supreme Court of India having a rich experience in the field and has been in the profession for more than 20 years. He is also an executive director in Lamane Infrastructure Private Limited, which has residential projects in Dehradoon, Uttarakhand."
             ,"Sunil Singh is a businessman, and also an entrepreneur. He is engaged in the business of Service industry like Housekeeping, Kitchen Stewarding or any other maintenance related services. Mr Singh is having a long & successful experience in running a complete Facility Management Services and rendering this services to various Corporate, Institutions, Real Estate and Hotel Industry for more than 14 years. He has been a promoter and director of various business entities engaged in Security and other Facility services. Presently he is MD of a facility services company named SAMG Facility Management Service Private Limited an ISO Certified company and Eagle Security Services which was incorporated in the year 2015."
             ,"Mr. Anil Kumar is dynamic personality and having book shops for UPSC, State Services Public Commision and other Gov. Services Exams books & other stationary materials at Rajendra Nagar, Karol Bagh and Punjabi Bagh in New Delhi, India."
             ,"Piyush Kumar Singh is running facility management company named White House Pvt Ltd. This firm established in 2001 & provides manpower for housekeeping services in Noida , Delhi, Gurgaon. Website:- www.gowhitehouse.in"
             ,"Dharmendra Singh Patel is from Kanpur. He is a businessman with great acumen. He is a real visionary leader. Mr. Patel is an un parallel business man with full of ideas and vision from the soil of UP. He is running Khadi Unit with name at Kanpur. Under this he manufactures and sells Cotton Khadi and Pali Khadi. He is running one 12th standard college Eklavya Inter College, Sajeti, Kanpur and one Eklavya Montessori School, Sajeti, Kanpur. He owns one Cattle market ( Animal market ) at Sajeti Kanpur which is spread about 02 Acres of land around."
             ,"Umesh Chandra Gangwar is well known industrialist from Noida, Uttar Pradesh. Mr. Gangwar is CEO & MD of his company Sameer Appliances Ltd. He is very smart thinker and applier of innovation in his own electrical appliances industry. He is manufacturing Ceiling Fans, Exhaust Fans, Table Fans (Table, Wall, Pedestal, All purpose Fans), Tower Fans, Irons, Gysers (ABS & Gas Gysers), Submersible Pump, Suction Pump, Juicer Mixer and Grinder. Sameer Appliances Ltd. office is at B 116, Sector 06, Noida, Uttar Pradesh, India"
             ,"Gyan Singh is proprietor of M/s Shanti Enterprises which is civil engineering firm whose head office at 2/152 Vikas Nagar, Lucknow, U.P. 226022. It is having its contractor ship in private sector factories, railway civil works & civil works in different UP state Government Department."
             ,"Anil Kumar Gangwar is a businessman, and also an entrepreneur. He was born in the year 1970 in the state of Uttar Pradesh in a city named Farrukhabad. He is engaged in the business of packaging industry. He is a successful businessman with proven track records in the same business. He is post graduated in commerce stream and having a long & successful experience in running a manufacturing unit of corrugated box and other similar packing components for more than 15 years. He has been a promoter and director of various business entities engaged in the corrugated box industry. Presently he is a managing director of a company named Shri Hari Paper Products Private Limited an ISO Certified company which was incorporated in the year 2011. The company is engaged in the business of manufacturing of Corrugated Boxes in India. The company deals with a varied range of products, namely – Expert quality corrugated boxes, PVC corrugated boxes, Packaging Cartoons, Plain Corrugated Cartoons, etc. and also provide all type of packaging solutions."
             ,"Mr. Priyadarshi is an Entrepreneur in the fields of construction and jewellery. He has helped form M/s Om Shree Sai International, in the year 2011 an export house that manufactures and trades gold, diamond and silver jewellery to countries like US, Canada, Dubai, Singapore etc. M/s P. D. Real Estate and Investments is another venture of his which has rich experience in construction management, property trading and construction in lutyens Delhi and Dehradoon."
             ,"Arun Sachan is Doctor by profession and he took retirement from government job before 7-8 years. Now Dr. Sachan is running Aman Drugs and Pharmaceuticals Pvt. Ltd. firm very successfully. This company situated at Patpargunj Industrial Area, Aanand Vihar, New Delhi, India."
           
        ];
           
         
            
            let actNId=$(this).attr('id');
            
            $('#setImg').attr("src",imgurl+image[actNId]);
              // $('#setname').html($(name[actNId]).text());
            $('#setname').html($("#name_"+actNId).text());
            $('#setfounder').html(founder[actNId]);
            $('#setcontent').html(content[actNId]);
             

      
         
    
        });
        });
</script>

