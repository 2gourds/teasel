<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ApisController;
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
		// 'app.Apis'
	];

	/**
	 * Test paymentByPaypal method
	 * @group paymentByPaypal
	 * @return void
	 */
	public function testPaymentByPaypal_testResponseOk()
	{
		$this->get('/api/paypal/payment');

		$this->assertResponseOk();
	}
}
