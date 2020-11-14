<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Company Extends Entity {
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _getName(){
        return $this->_properties['id'] . '_' . $this->_properties['company_name'];
    }
}