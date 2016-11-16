<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class HomesController extends AppController
{

	private function sanpham($id){
		$this->loadModel('Products');
		$this->loadModel('Catproducts');

		$catproducts = $this->Catproducts->find()
		->where(['Catproducts.parent_id'=>$id, 'Catproducts.status' => 1])
		->order(['created' => 'desc'])
		;

		$mang=array();
		$i=0;
		foreach($catproducts as $key=>$value){
			$mang[$i++]=$value['id'];
		}

		$this->paginate = [
		'conditions' => ['cat_id IN' => $mang],
		'order' => ['created' => 'desc']
		];
		$products = $this->paginate($this->Products);

		return $products;
	}

	public function index()
	{
		$this->loadModel('Products');


		$products_new = $this->Products->find()
		->where(['status' => 1])
		->order(['created' => 'desc'])
		;

		$products_hot = $this->sanpham(32);

		$products_like = $this->sanpham(33);

		
		

		$this->set(['products_hot' => $products_hot, 'products_like'=> $products_like, 'products_new'=> $products_new]);
		$this->set('title', 'HomePage');
		
	}

	


	public function intro()
	{
		$this->loadModel('Posts');
		$gioithieu = $this->Posts->find()->all();
		$this->set(compact('gioithieu'));
		$this->set('title', 'Giới thiệu');
	}

	public function select($id)
	{
		$this->loadModel('Products');

		$product = $this->Products->get($id);

		$this->request->session()->write('compare.'.$id, $product);

		$products = $this->request->session()->read('compare');

		$this->set(compact('products'));
	}
}