	<script>
		$(document).ready(function() {
		  $('li.active-new').removeClass('active-new');
		  $('a[href="' + location.pathname + '"]').closest('li').addClass('active-new'); 
		  $('a[href="' + location.pathname + '"]').parents('li:eq(1)').addClass('active-sub'); 
		  if($('a[href="' + location.pathname + '"]').closest('li').length == 0) {
			  $('li.navHome').addClass('active-new');
		  }
		});
	</script>