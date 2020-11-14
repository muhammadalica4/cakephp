<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Contact Extends Entity {
    protected $_accessible = [
        '*' => true,
        'company_id' => true,
        'id' => false,
        'company' => true
    ];
}