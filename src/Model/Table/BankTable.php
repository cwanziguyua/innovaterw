<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class BankTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('sm_banks');
    }
}