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
		$this->autoRender = false;		
	}
}
