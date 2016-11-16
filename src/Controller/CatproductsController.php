<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class CatproductsController extends AppController
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

		if (!empty($mang)) {
			$this->paginate = [
			'conditions' => ['cat_id IN' => $mang],
			'order' => ['created' => 'desc']
			];
		} else{
			$this->paginate = [
			'conditions' => ['cat_id' => $id],
			'order' => ['created' => 'desc']
			];
		}
		
		$products = $this->paginate($this->Products);

		return $products;
	}

	public function view($id= null)
	{
		$this->loadModel('Products');
		if ($id != null) {
			$catproduct = $this->Catproducts->get($id);
			$products = $this->sanpham($catproduct->id);
			$this->set('title', $catproduct->name);
		}else{
			$catproduct = $this->Catproducts->find();
			$products = $this->Products->find();
			$this->set('title', 'Tìm kiếm nâng cao');
		}
		
		$this->set('catproduct', $catproduct);
		$this->set('products', $products);
		$this->set('check', $id);
		
	}

	public function search()
	{
		$this->viewBuilder()->layout('json');
		$this->loadModel('Products');
		$products = $this->Products->find();
		$this->set(compact('products'));
	}
}