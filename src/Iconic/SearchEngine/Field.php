<?php
/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 11:21 πμ
 */

namespace Iconic\SearchEngine;

abstract class Field
{
    protected $fieldName;
    protected $queryPart;

    public function getFieldName()
    {
        return $this->fieldName;
    }

    protected function setQueryPart($value)
    {
        $this->queryPart = $value;
    }

    public function getQueryPart()
    {
        return $this->queryPart;
    }
}