<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property int $cat_id
 * @property int $price
 * @property int $orginal_price
 * @property string $code
 * @property int $type
 * @property string $shortdes
 * @property string $content
 * @property string $images
 * @property int $pos
 * @property int $like
 * @property int $hot
 * @property int $saleoff
 * @property int $highlight
 * @property string $title_seo
 * @property string $meta_key
 * @property string $meta_des
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $status
 * @property int $view
 * @property string $slug
 *
 * @property \App\Model\Entity\Cat $cat
 */
class Product extends Entity
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
