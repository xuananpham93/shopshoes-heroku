<?php
namespace App\Controller;

use App\Controller\AppController;


class NewsController extends AppController
{
	public function index($id)
	{
		$new = $this->News->get($id);

		$related_news = $this->News->find()
		->where(['catalogue_id' => $new->catalogue_id, 'News.id <>' => $new->id])
		->order(['created' => 'desc']);

		$this->set(compact('new'));
		$this->set(compact('related_news'));
		$this->set('title', $new->name);
	}
}