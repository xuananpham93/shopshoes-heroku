<?php
namespace App\Controller;

use App\Controller\AppController;


class PostsController extends AppController {

	public $components = array(
		'Ratings.Ratings'
		);

	public function view($postId = null) {
		$id = 1;
		if (!$this->Posts->exists($id)) {
			throw new \NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => ['Posts.' . $this->Posts->primaryKey() => $id]);
		$this->set('isRated', $this->Posts->isRatedBy($id, $this->Auth->user('id')));
		$this->set('post', $this->Posts->find('all', $options)->first());
	}
}