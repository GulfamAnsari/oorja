<!DOCTYPE html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT'].'/metaTag.php');?>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/links.php');?>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
		</script>
<!-- //start-smoth-scrolling -->
<body>
	oorja
</body>
</html>
