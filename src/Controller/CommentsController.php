<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class CommentsController extends AppController
{	
	

	public function index()
	{
		$this->loadModel('Logos');
		
		$logos = $this->Logos->find('all');
        $this->set('logos', $logos);
	}
}