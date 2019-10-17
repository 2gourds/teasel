<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ApisController;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ApisController Test Case
 *
 * @uses \App\Controller\ApisController
 */
class ApisControllerTest extends TestCase
{
	use IntegrationTestTrait;

	/**
	 * Fixtures
	 *
	 * @var array
	 */
	public $fixtures = [
		'app.Payments'
	];

	/**
	 * Test paymentByPaypal method
	 * @group paymentByPaypal
	 * @return void
	 */
	public function testPaymentByPaypal()
	{ 	
		// Enable CSRF Token for API calls.
		$this->enableCsrfToken();
    	$this->enableSecurityToken();

    	// Set the data to be passed from the API completion call.
		$data = [
			'orderId' => 'sampleOrderId'
		];

		// Call the server-side API to save the data.
		$this->post('/api/paypal/payment', $data);

		// Retrieve the data as defined by the Order ID saved.
		$this->Payments = TableRegistry::getTableLocator()->get('Payments');
		$payment = $this->Payments->findByOrderUid($data['orderId'])->first();
		
		// Assert whether or not the data with the specific Order ID has been saved or not.
		$this->assertResponseOk();
		$this->assertNotEmpty($payment);
	}
}
