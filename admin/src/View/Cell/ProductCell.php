<?php
class ProductCell extends ViewCell {
	public $view = 'single_post';
    // I am renaming the method `render` to `run` for a specific reason...
	public function index(array $options = [])
	{
		$this->loadModel('Products');
		$product = $this->Products->findById($options['id']
			$this->set(compact('product'));
        return $this; // So I can chain the `run` method
    }
}
?>