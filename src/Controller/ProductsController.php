<?php
namespace App\Controller;


/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 */
class ProductsController extends AppController
{
	/*Elastic search*/
	

	/*End Elastic*/

	public function index($id)
	{

		$product = $this->Products->get($id, [
			'contain' => ['Brands']
			]);
		$this->Products->updateAll(array('view'=> $product->view + 1), array('id'=>$id));

		$related = $this->Products->find()
		->where(['Products.cat_id' => $product->cat_id, 'Products.id <>' => $product->id])
		;

		$this->loadModel('Brands');
		$brand = $this->Brands->find()
		->where(['id' => $product->brand_id])
		;


		$this->set('related', $related);
		$this->set(compact('brand'));
		$this->set('product', $product);
		$this->set('title', $product->name);
	}

	public function search()
	{
		$keyword = $_GET['search'];

		if ($keyword == '' or $keyword == null) {
			$products = false;
		} else{
			$this->paginate = array(
				'conditions' => array(
					'Products.name like' => '%'.$keyword.'%'
					)
				);

			$products = $this->paginate('Products');
		}
		$this->set(compact('products'));
		$this->set(compact('keyword'));
		
		$this->set('title', 'Search');
	}


	public function viewCart($id=null)
	{

		$quantity = $_GET['soluong'];
		$size = $_GET['size'];

		$product = $this->Products->get($id);
		if ($quantity == null || $quantity == '') {
			$quantity = 1;
		} else{
			$quantity = (int)$quantity;
		}

		$item = array(
			'id' => $product->id,
			'name' => $product->name,
			'images' => $product->images,
			'alias' => $product->alias,
			'price' => $product->price,
			'quantity' => $quantity,
			'size' => $size
			);
		
		$this->request->session()->write('cart.'.$id.$size, $item);
		$cart = $this->request->session()->read('cart');

		$total = $this->Tool->sum($cart, 'quantity', 'price');
		$this->request->session()->write('payment.total', $total);

		$payment = $this->request->session()->read('payment');

		$this->set(compact('cart', 'payment'));
		$this->set('title', 'Giỏ hàng');
		$this->redirect(DOMAIN.'detail-cart');
		//unset($_SESSION['cart']);
		//$this->request->session()->destroy();die;
	}

	public function detailCart()
	{
		$cart = $this->request->session()->read('cart');
		$payment = $this->request->session()->read('payment');
		$this->set(compact('cart', 'payment'));
		$this->set('title', 'Giỏ hàng');
	}

	public function emptyCart()
	{
		$this->request->session()->delete('cart');
		$this->request->session()->delete('payment');
		$this->redirect('/');
	}

	public function remove($id = null, $size = null)
	{
		$this->request->session()->delete('cart.'.$id.$size);
		$cart = $this->request->session()->read('cart');
		if (empty($cart)) {
			$this->emptyCart();
		} else {
			$total = $this->Tool->sum($cart, 'quantity', 'price');
			$this->request->session()->write('payment.total', $total);
			$this->redirect(DOMAIN.'detail-cart');
		}	
	}

	public function updateCart($id = null, $quantity = null, $size = null)
	{
		//$this->request->session()->check('cart.'.$id);
		$cart = $this->request->session()->read('cart.'.$id.$size);
		

		if ($quantity > 0) {
			$cart['quantity'] = $quantity;
			//pr($cart); die;

			$this->request->session()->write('cart.'.$id.$size, $cart);
			$cart = $this->request->session()->read('cart');
			//pr($cart); die;
			
			$total = $this->Tool->sum($cart, 'quantity', 'price');
			$this->request->session()->write('payment.total', $total);
		}

		

		//pr($this->request->session()->read('cart'));die;

		
		$this->redirect(DOMAIN.'detail-cart');
	}

	public function compare()
	{
		$products = $this->request->session()->read('compare');
		$this->request->session()->delete('compare');
		$this->set(compact('products'));
		$this->set('title', 'Compare products');
	}
}
