<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;


class OrdersController extends AppController
{
	public function index()
	{

		//$this->request->session()->destroy();
		if ($this->request->is('post')) {

			//pr($_POST);die;
			$cart = json_encode($this->request->session()->read('cart'));
			$payment = json_encode($this->request->session()->read('payment'));
			$user_info = $this->Auth->user();

			$data = array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'user_id' => $user_info['id'],
				'address' => $_POST['address'],
				'phone' => $_POST['phone'],
				'status' => 0,
				'cart' => $cart,
				'payment' => $payment,
				'created' => date("Y/m/d h:i:s")
				);

			$order = $this->Orders->newEntity();
			$order = $this->Orders->patchEntity($order, $data);

			// pr($order); die;

			if ($this->Orders->save($order)) {
				$this->request->session()->delete('cart');
				$this->request->session()->delete('payment');
				$this->Flash->success(__('Bạn đã đặt hàng thành công.'));

				/*Send email*/
				// $email = new Email('default');
				// $email->from(['xuananpham93@gmail.com' => 'My Site'])
				// ->to($_POST['email'])
				// ->subject('The shoes shop')
				// ->send('Cảm ơn bạn đã đặt hàng của chúng tôi. Chúng tôi sẽ giao hàng trong thời gian sớm nhất');

				//Email::deliver($_POST['email'], 'Subject', 'Message', ['from' => 'xuananpham93@gmail.com']);

				if (!empty($user_info['id'])) {
					$this->redirect('/lich-su-mua-hang');
				} else {
					$this->redirect('/');
				}
			} else {
				$this->Flash->error(__('Có lỗi xảy ra. Please, try again.'));
			}

		}
	}

	public function history()
	{
		$this->set('title', 'Lịch sử mua hàng');
		$user_info = $this->Auth->user();

		$orders = $this->Orders->find()
		->where(['Orders.user_id' => $user_info['id']])
		->order(['created' => 'desc'])
		;

		// pr($orders);die;

		$this->set('orders', $orders);
	}

	public function detail($id)
	{
		$order = $this->Orders->get($id);
		if (!empty($order)) {
			$user_info = $this->Auth->user();
			if($user_info['id'] == $order->user_id){
				$this->set('order', $order);
			}
		}
		$this->set('title','Chi tiết đơn hàng');
	}
}