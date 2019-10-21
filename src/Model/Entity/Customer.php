<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $room
 * @property string|null $building
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $city
 * @property string|null $postal_code
 * @property string $country
 * @property string|null $phone
 * @property string $email
 * @property string $username
 * @property string $password
 */
class Customer extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'room' => true,
        'building' => true,
        'address_line1' => true,
        'address_line2' => true,
        'city' => true,
        'postal_code' => true,
        'country' => true,
        'phone' => true,
        'email' => true,
        'username' => true,
        'password' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
