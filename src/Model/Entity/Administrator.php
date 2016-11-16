<?php 
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher; //include this line
use Cake\ORM\Entity;

class Administrator extends Entity
{

    // Make all fields mass assignable except for primary key field "id".
	protected $_accessible = [
	'*' => true,
	'id' => false
	];


	protected function _setPassword($password)
	{
		return (new DefaultPasswordHasher)->hash($password);
	}

}
?>