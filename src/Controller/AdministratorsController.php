<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class AdministratorsController extends AppController
{
	public function login()
	{
		if ($this->request->is('post')) {

			$admin = $this->Auth->identify();
			// echo $admin; die;
			if ($admin) {
				$this->Auth->setUser($admin);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Your username or password is incorrect.');
		}

		$this->set('title' , 'Login');
	}

	public function logout()
	{
		$this->Flash->success('You are now logged out.');
		return $this->redirect($this->Auth->logout());
	}

	public function add()
	{
		if ($this->request->is('post')) {

			$userTable = TableRegistry::get('Administrators');
			$exists = $userTable->exists(['name' => $this->request->data['name']]);

			if ($exists) {
				$this->Flash->error('User is registered.');
			} else{
				if (strcmp(trim($this->request->data['password']), trim($this->request->data['confirm-password'])) == 0) {
					$user = $this->Administrators->newEntity();

					$user = $this->Administrators->patchEntity($user, $this->request->data);

					if($result = $this->Administrators->save($user)){

						$authUser = $this->Administrators->get($result->id)->toArray();
						$this->Auth->setUser($authUser);
						$this->Flash->success(__('The user has been saved.'));
						$this->redirect('/');
					}
				} else{
					$this->Flash->error('Confirm password is wrong.');
				}

			}	
		}

		$this->set('title', 'Register');
	}

	public function changeInfo()
	{
		$user = $this->request->session()->read('Auth.User');
		if ($this->request->is('post')) {
			$user = $this->Administrators->get($user['id'], [
				'contain' => []
				]);
			//pr($this->request->data);die;
			if ($this->request->is(['patch', 'post', 'put'])) {
				$user = $this->Administrators->patchEntity($user, $this->request->data);
				if ($this->Administrators->save($user)) {
					$user['fullname'] = $user['lastname'].$user['firstname'];
					$this->Administrators->updateAll(['fullname' => $user['fullname']], ['id' => $user['id']]);
					$this->request->session()->write('Auth.User', $user);

					$this->Flash->success(__('The user has been saved.'));
					return $this->redirect('/');
				} else {
					$this->Flash->error(__('The user could not be saved. Please, try again.'));
				}
			}
			
		}
		$this->set(compact('user'));
		$this->set('title', 'Change infomation');
	}

	public function history()
	{
		# code...
	}

	public function changePassword()
	{
		$user = $this->request->session()->read('Auth.User');
		if ($this->request->is('post')) {
			if (strcmp(trim($this->request->data['password']), trim($this->request->data['confirm-password'])) == 0) {

				$password = $this->request->data['password'];
				$hashPswdObj = new DefaultPasswordHasher;
				$hashpswd = $hashPswdObj->hash($password);


				$this->Administrators->updateAll(['password' => $hashpswd], ['id' => $user['id']]);
				$this->Flash->success(__('Password changed.'));
				$this->redirect('/');
			} else {
				$this->Flash->error(__('Confirm password is wrong.'));
			}
		}

		$this->set('title', 'Change Password');


	}

}