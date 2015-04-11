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
		$('#current_emails').text($('#email').val());
		$('#email').multiple_emails();
		$('#email').change( function(){
			$('#current_emails').text($(this).val());
		});
		
	});
	</script>
	<script>
	  $('#confirm-submit').on('show.bs.modal', function (e) {
	      $message = $(e.relatedTarget).attr('data-message');
	      $(this).find('.modal-body p').text($message);
	      $title = $(e.relatedTarget).attr('data-title');
	      $(this).find('.modal-title').text($title);

	      // Pass form reference to modal for submission on yes/ok
	      var form = $(e.relatedTarget).closest('form');
	      $(this).find('.modal-footer #btnYes').data('form', form);
	  });

	  $('#confirm-submit').find('.modal-footer #btnYes').on('click', function(){
	      $(this).data('form').submit();
	  });
	</script>