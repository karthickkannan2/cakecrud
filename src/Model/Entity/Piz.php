<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Piz Entity
 *
 * @property int $id
 * @property string $title
 * @property string $ingredients
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created_at
 */
class Piz extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'title' => true,
        'ingredients' => true,
        'email' => true,
        'created_at' => true,
    ];
}
