<?php
namespace App\Controller;

use App\Controller\AppController;


class CataloguesController extends AppController
{
	public function index($id)
	{
		$this->loadModel('News');
		$catalogues = $this->Catalogues->get($id);
		

		$news = $this->News->find()
		->where(['News.catalogue_id' => $catalogues->id]);
		;

		$this->set(compact('catalogues'));
		$this->set(compact('news'));
		$this->set('title', $catalogues->name);
	}
}