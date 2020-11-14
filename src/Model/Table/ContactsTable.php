<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ContactsTable extends Table {

    public function initialize(array $config){
        parent::initialize($config);
        $this->setDisplayField('company_id');
        $this->belongsTo('Companies');
    }
}