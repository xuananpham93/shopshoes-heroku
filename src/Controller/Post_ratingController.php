<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class Post_ratingController extends AppController
{
	public function index()
	{
		$rating = $this->Post_rating->find();
		pr($rating);
	}
}