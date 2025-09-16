<?php

namespace M2i\Ecf\Entity;

abstract class BaseEntity
{
    protected int $_id;

    public function getId(): int
    {
        return $this->_id;
    }

    public function hydrate(array $data): void
    {
        foreach($data as $key => $value) {

            // $strPropertyName = '_' . str_replace('category_', '', $key);
            $strPropertyName = '_' . $key;

            if(property_exists($this, $strPropertyName)) {

                $this->$strPropertyName = $value;
            }
        }
    }
}