<?php

namespace QueryBuilder\MySql;

class Filters
{
    private $where;
    private $order;

    public function setWhere(string $field, string $condition, $value) 
    {
        $this->where = " WHERE {$field} {$condition} {$value}";
    }

    public function setOrderBy(string $field, string $order)
    {
        $this->order = " ORDER BY {$field} {$order}";
    }

    public function getSql() :string
    {
        return "{$this->where}{$this->order}";
    }
}