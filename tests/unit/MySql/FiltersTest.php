<?php

namespace QueryBuilder\MySql;

class FiltersTest extends \PHPUnit\Framework\TestCase
{
    public function testWhere()
    {
        $filters = new Filters;
        $filters->setWhere('id', '=', 1);

        $actual = $filters->getSql();
        $expected = ' WHERE id = 1';

        $this->assertEquals($expected, $actual);
    }

    public function testOrderBy()
    {
        $filters = new Filters;
        $filters->setOrderBy('created', 'DESC');

        $actual = $filters->getSql();
        $expected = ' ORDER BY created DESC';

        $this->assertEquals($expected, $actual);
    }
}