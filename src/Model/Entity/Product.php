<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $sku
 * @property string $supplier_sku
 * @property string $product_name
 * @property string $product_description
 * @property int $supplier_id
 * @property int $category_id
 * @property int $unit_price
 *
 * @property \App\Model\Entity\Supplier $supplier
 * @property \App\Model\Entity\Category $category
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
        'sku' => true,
        'supplier_sku' => true,
        'product_name' => true,
        'product_description' => true,
        'supplier_id' => true,
        'category_id' => true,
        'unit_price' => true,
        'supplier' => true,
        'category' => true
    ];
}
