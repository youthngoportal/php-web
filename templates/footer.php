	<!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				copyright youth ngo portal - 2015
				<!-- <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a> -->
		
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Footer -->

	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/multiple-emails.js"></script>
    <script type="text/javascript">
    	$('body').scrollspy({
		    target: '.bs-docs-sidebar',
		    offset: 40
		});
    </script>
    <script>
	$(function() {
		$('#current_emails').text($('#example_email').val());
		$('#example_email').multiple_emails();
		$('#example_email').change( function(){
			$('#current_emails').text($(this).val());
		});
		
	});
	</script>