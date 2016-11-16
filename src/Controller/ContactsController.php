<?php
namespace App\Controller;

use App\Controller\AppController;


class ContactsController extends AppController
{
	public function index()
	{
		$contacts = $this->Contacts->newEntity();
		$this->set('title', 'Liên hệ');
		if ($this->request->is('post')) {
			$contacts = $this->Contacts->patchEntity($contacts, $this->request->data);
			if ($this->Contacts->save($contacts)) {
				$this->Flash->success(__('Tin nhắn đã được gửi. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất'));

				return $this->redirect('/');
			} else {
				$this->Flash->error(__('Tin nhắn chưa được gửi. Please, try again.'));
			}

		}
	}
}