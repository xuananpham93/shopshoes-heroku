<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Setting Entity
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $address
 * @property string $contactinfo
 * @property string $info
 * @property string $gmaps
 * @property string $maps
 * @property string $analytics
 * @property string $telephone
 * @property string $phone
 * @property string $hotline
 * @property string $email
 * @property string $url
 * @property string $meta_key
 * @property string $meta_des
 * @property \Cake\I18n\Time $created
 * @property string $modified
 * @property string $youtube
 * @property string $twitter
 * @property string $yahoo
 * @property string $facebook
 * @property string $images
 */
class Setting extends Entity
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
