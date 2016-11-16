<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Catproducts cell
 */
class CatproductsCell extends Cell
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
        $this->loadModel('Catproducts');
        $this->loadModel('Catalogues');
        $catproducts = $this->Catproducts->find()
        ->order(['created' => 'ASC'])
        ;

        $catproducts1 = $this->Catproducts->find()
        ->order(['created' => 'ASC'])
        ;

        $catproducts2 = $this->Catproducts->find()
        ->order(['created' => 'ASC'])
        ;

        $this->set(['catproducts' => $catproducts, 
            'catproducts1' => $catproducts1, 
            'catproducts2' => $catproducts2]
            );


        $catalogues = $this->Catalogues->find()
        ->order(['created' => 'ASC'])
        ;

        $catalogues1 = $this->Catalogues->find()
        ->order(['created' => 'ASC'])
        ;

        $catalogues2 = $this->Catalogues->find()
        ->order(['created' => 'ASC'])
        ;

        $this->set(['catalogues' => $catalogues, 
            'catalogues1' => $catalogues1,
            'catalogues2' => $catalogues2]
            );
    } 

}
