<?php 
namespace App\View\Cell;

use Cake\View\Cell;

class InboxCell extends Cell
{

	public function display()
	{
		$this->loadModel('Products');
        $unread = $this->Products->find('unread');
        $this->set('unread_count', $unread->count());
	}

}
?>