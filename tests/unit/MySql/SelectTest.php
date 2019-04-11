<?php

namespace QueryBuilder\MySql;

class SelectTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectSemFiltro()
    {
        $select = new Select;
        $select->setTable('pages');

        $actual = $select->getSql();
        $expected = 'SELECT * FROM pages;';

        $this->assertEquals($expected, $actual);
    }

    public function testSelectEspecificandoOsCampos()
    {
        $select = new Select;
        $select->setTable('users');
        $select->setFields(['nome', 'email']);

        $actual = $select->getSql();
        $expected = 'SELECT nome, email FROM users;';

        $this->assertEquals($expected, $actual);
    }
}