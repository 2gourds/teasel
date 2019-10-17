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

	// Call to PayPal JavaScript API. client-id: as setup from the PayPal Sandbox Dashboard
	echo $this->Html->script('https://www.paypal.com/sdk/js?client-id=Aczex-Z7Tgfk6-nZsbqIHuh0m9yKGXdYYll4rJxqOaT-4qbZsIZw5HDWQhLm16oQB1fK9GAG4tSLC0dm');
?>

<div id="paypal-button-container"></div>

<script>
	paypal.Buttons({
		createOrder: function(data, actions) {
			return actions.order.create({
				purchase_units: [{
					amount: {
						value: '0.01'
					}
				}]
			});
		},

		onApprove: function(data, actions) {
			return actions.order.capture().then(function(details) {
				// alert('Transaction completed by ' + details.payer.name.given_name);
				// Add CSRF token to fetch request.
				const csrfToken = <?php echo json_encode($this->request->getParam('_csrfToken')) ?>;
				const headers = new Headers({
					'Content-Type': 'application/json',
					// 'Content-Type': 'x-www-form-urlencoded',
					'X-CSRF-TOKEN': csrfToken
				});
				// Call server side API to save the transaction
				// TODO: change API link as dynamic link
				return fetch('/teasel/api/paypal/payment', {
					method: 'post',
					headers,
					body: JSON.stringify({
						orderId: data.orderID
					})
				}).then(function(res) {
					console.log(res);
				});
			});
		},

		onError: function(err) {
			console.log('Error:' + err);
		}
	}).render('#paypal-button-container');
</script>