<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Advertisments cell
 */
class AdvertismentsCell extends Cell
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
        $this->loadModel('Advertisements');
        $this->loadModel('Videos');

        $advertisments = $this->Advertisements->find();
        $videos = $this->Videos->find();

        $this->set(['advertisments' => $advertisments, 'videos' => $videos]);
    }
}
