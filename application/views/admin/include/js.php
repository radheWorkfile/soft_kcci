		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="<?php echo base_url();?>themes/assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>themes/assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url();?>themes/assets/js/modernizr.js"></script>
		<script src="<?php echo base_url();?>themes/assets/js/moment.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="<?php echo base_url();?>themes/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="<?php echo base_url();?>themes/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- News ticker -->
		<script src="<?php echo base_url();?>themes/assets/vendor/newsticker/newsTicker.min.js"></script>
		<script src="<?php echo base_url();?>themes/assets/vendor/newsticker/custom-newsTicker.js"></script>

		<!-- Main Js Required -->
		<script src="<?php echo base_url();?>themes/assets/js/main.js"></script>

		<script>
			var base_url="<?php echo base_url()?>";
			function changeStatus(id, status, table, loader) {
				
         if (confirm("Do You Want To Changes")) {
		
        // $("#" + id).html('<img src="' + base_url + 'media/images/loading.gif" style="width:57px;" />');
        $.ajax({
            type: 'POST',
            url: base_url + loader,
            data: { 'id': id, 'status': status, 'table': table},
            success: function(data) {
                $("#" + id);
                window.location.reload(true);               

            }
        });
    }
}

		</script>