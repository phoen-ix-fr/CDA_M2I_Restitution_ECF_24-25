<?php

namespace M2i\Ecf\Entity;

class Category
{
    private int $_id;
    private string $_name;

    public function getId(): int
    {
        return $this->_id;
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function hydrate(array $data): void
    {
        foreach($data as $key => $value) {

            $strPropertyName = '_' . $key;
            
            if(property_exists($this, $strPropertyName)) {

                $this->$strPropertyName = $value;
            }
        }
    }
}