<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000"
		data-name="Coding with The Below guy"
		data-description="Engr Sana Ullah Mehsood"
		
		data-currency="inr"
		data-email="sanaullah1696@gmail.com"
	>
	</script>

</form>