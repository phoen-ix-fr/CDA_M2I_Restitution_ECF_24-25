<?php

namespace M2i\Ecf\Model;

use M2i\Ecf\Service\DatabaseService;

abstract class BaseModel
{
    protected $_pdo;

    public function __construct()
    {        
        $this->_pdo = DatabaseService::getInstance();
    }
}