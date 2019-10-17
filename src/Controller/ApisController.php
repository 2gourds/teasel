<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Apis Controller
 *
 *
 * @method \App\Model\Entity\Api[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApisController extends AppController
{
	/**
	 * Test method
	 *
	 * @return \Cake\Http\Response|null
	 */
	public function paymentByPaypal()
	{
		// Since the is an API call, disable rendering of views.
		$this->autoRender = false;

		// Get the POST data.
		$orderId = $this->request->getData('orderId');
		
		// Create new payment entity and save the data.
		$paymentsTable = TableRegistry::getTableLocator()->get('Payments');
		$payment = $paymentsTable->newEntity();
		$payment->order_uid = $orderId;
		$payment->amount = 0.01; // TODO: Set amount based on specific value.
		$paymentsTable->save($payment);
	}
}
