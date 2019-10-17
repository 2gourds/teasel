<?php 
	// For PayPal API Use: ensure optimal rendering on mobile devices
	echo $this->Html->meta([
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1'
	]);


	// For PayPal API Use: IE compatibility
	echo $this->Html->meta([
		'http-equiv' => 'X-UA-Compatible',
		'content' => 'IE=edge'
	]);

	// Call to PayPal JavaScript API
	echo $this->Html->script('https://www.paypal.com/sdk/js?client-id=AeJ0nn1g-474J3Qadou0NdLs-dOYfcrE3GtVgyUhyXfhbdq0Oe3Xu6OojYO_14gP8gHzvh8WZlowdHN2');
?>

<div id="paypal-button-container"></div>

<script>
	paypal.Buttons().render('#paypal-button-container');
</script>