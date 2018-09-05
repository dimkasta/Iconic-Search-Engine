<?php
/**
 * Created by PhpStorm.
 * User: DKASTANI
 * Date: 5/9/2018
 * Time: 11:04 πμ
 */

namespace Iconic\SearchEngine;

abstract class Number extends Field
{
    public function in(array $filter)
    {
        $values = implode(',', $filter);
        $this->setQueryPart(" AND ($this->fieldName IN ($values)) ");
    }


    public function equals($filter)
    {
        $this->setQueryPart(" AND ($this->fieldName = $filter) ");
    }

    public function lte($filter)
    {
        $this->setQueryPart(" AND ($this->fieldName >= $filter) ");
    }

    public function gte($filter)
    {
        $this->setQueryPart(" AND ($this->fieldName <= $filter) ");
    }
}
