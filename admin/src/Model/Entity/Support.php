<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Support Entity
 *
 * @property int $id
 * @property string $name
 * @property string $duty
 * @property string $yahoo
 * @property string $skype
 * @property string $hotline
 * @property int $pos
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $type
 * @property int $status
 */
class Support extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
