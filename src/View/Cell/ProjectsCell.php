<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Projects cell
 */
class ProjectsCell extends Cell
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
        $this->loadModel('Projects');
        $projects =  $this->Projects->find()
        ->order(['created' => 'ASC'])
        ->where(['status' => 1]);
        $this->set('projects', $projects);
    }
}
