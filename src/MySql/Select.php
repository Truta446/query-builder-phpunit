<?php

namespace QueryBuilder\MySql;

class Select
{
    private $table;
    private $fields = [];
    private $filters;

    public function setTable(string $table)
    {
        $this->table = $table;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setFilter(Filters $filters)
    {
        $this->filters = $filters->getSql();
    }

    public function getSql() :string
    {
        $fields = '*';

        if (!empty($this->fields)) {
            $fields = implode(', ', $this->fields);
        }

        $filters = '';

        if (!empty($this->filters)) {
            $filters = $this->filters;
        }

        return "SELECT {$fields} FROM {$this->table}{$this->filters};";
    }
}