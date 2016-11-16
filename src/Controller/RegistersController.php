<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class RegistersController extends AppController
{
	public function index()
	{
		# code...
	}

	public function dangky()
	{
		$registerTable = TableRegistry::get('Registers');
		$exists = $registerTable->exists(['email' => $_REQUEST['email']]);
		$register = $this->Registers->newEntity();
		if ($exists) {
			$this->Flash->error(__('Email đã tồn tại. Please, try again !'));
		} else{
			$register = $this->Registers->patchEntity($register, $_REQUEST);
			$this->Registers->save($register);
			$this->Flash->success(__('Đăng ký thành công !'));
		}

		$this->redirect($this->referer());
	}
}

// public function dangkymailkhuyenmai() {
// 	if(isset($_POST['email'])){
// 		$a = $this->Registertocoment->find('all',array('conditions'=>array('email'=>$_POST['email'])));
// 		if($this->Registertocoment->getNumrows()== 0 ){
// 			$data['Registertocoment']['email'] = $_POST['email'];
// 			$this->Registertocoment->save($data['Registertocoment']);
// 			echo '<script language="javascript"> alert("Đăng ký nhận mail thành công !"); location.href="' . DOMAIN . '";</script>';
// 		}else{
// 			echo '<script language="javascript"> alert("Email đã được đăng ký !"); location.href="' . DOMAIN . '";</script>';
// 		}
// 	}
// }