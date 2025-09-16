<?php

namespace M2i\Ecf\Entity;

class Product extends BaseEntity
{
    protected string $_name;
    protected ?string $_description;
    protected int $_quantity;

    protected Category $_category;

    public function getName(): string
    {
        return $this->_name;
    }
    
    public function getDescription(): ?string
    {
        return $this->_description;
    }
    
    public function getQuantity(): int
    {
        return $this->_quantity;
    }

    public function getCategory(): Category
    {
        return $this->_category;
    }
}