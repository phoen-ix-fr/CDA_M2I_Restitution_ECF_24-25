<?php

namespace M2i\Ecf\Entity;

class Category extends BaseEntity
{
    protected string $_name;

    public function getName(): string
    {
        return $this->_name;
    }
}