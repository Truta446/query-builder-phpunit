<?php

namespace QueryBuilder\MySql;

class SelectAndFiltersTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectComFiltros()
    {
        $select = new Select;
        $select->setTable('pages');
        $select->setFields(['nome', 'email']);
        
        $filters = new Filters;
        $filters->setWhere('id', '=', 1);
        $filters->setOrderBy('created', 'DESC');

        $select->setFilter($filters);

        $actual = $select->getSql();
        $expected = 'SELECT nome, email FROM pages WHERE id = 1 ORDER BY created DESC;';

        $this->assertEquals($expected, $actual);
    }
}