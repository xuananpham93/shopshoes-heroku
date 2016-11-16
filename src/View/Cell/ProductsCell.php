<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Products cell
 */
class ProductsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Products');
        $products =  $this->Products->find()
        ->order(['created' => 'ASC'])
        ->where(['hot' => 1]);
        $this->set('products', $products);
    }

    
}
