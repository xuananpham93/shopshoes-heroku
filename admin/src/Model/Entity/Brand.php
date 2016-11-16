<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Brand Entity
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property string $alias
 * @property string $images
 * @property int $lft
 * @property int $rght
 * @property int $pos
 * @property int $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $slug
 *
 * @property \App\Model\Entity\Catproduct $catproduct
 * @property \App\Model\Entity\Brand $parent_brand
 * @property \App\Model\Entity\Brand[] $child_brands
 */
class Brand extends Entity
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
