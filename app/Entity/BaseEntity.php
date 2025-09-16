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

            if(str_ends_with($key, '_id')) {
                $strPropertyName = str_replace('_id', '', $key);

                $strModelClass = 'M2i\\Ecf\\Model\\' . ucfirst($strPropertyName) . 'Model';
                $objModel   = new $strModelClass();
                $objForeign = $objModel->findByid($value);

                $strPropertyName = '_' . $strPropertyName;
                $this->$strPropertyName = $objForeign;
            }
            else {
                // $strPropertyName = '_' . str_replace('category_', '', $key);
                $strPropertyName = '_' . $key;

                if(property_exists($this, $strPropertyName)) {

                    $this->$strPropertyName = $value;
                }
            }
        }
    }
}