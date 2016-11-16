<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Slideshow cell
 */
class SlideshowsCell extends Cell
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
        $this->loadModel('Slideshows');
        $slideshows = $this->Slideshows->find()
        ->order(['created' => 'ASC'])
        ->where(['status' => 1])
        // ->limit(3)
        ;
        $this->set('slideshows', $slideshows);
    }
}
