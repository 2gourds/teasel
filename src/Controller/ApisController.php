<?php
namespace App\Controller;

use App\Controller\AppController;

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

		$orderId = $this->request->getData('orderId');
		debug($orderId);
	}
}
