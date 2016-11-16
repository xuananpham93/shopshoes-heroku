<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Catproduct Entity
 *
 * @property int $id
 * @property string $name
 * @property string $name_en
 * @property int $parent_id
 * @property int $saleoff
 * @property string $alias
 * @property string $images
 * @property int $lft
 * @property int $rght
 * @property int $pos
 * @property int $status
 * @property string $title_seo
 * @property string $meta_key
 * @property string $meta_des
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $slug
 *
 * @property \App\Model\Entity\ParentCatproduct $parent_catproduct
 * @property \App\Model\Entity\ChildCatproduct[] $child_catproducts
 */
class Catproduct extends Entity
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
