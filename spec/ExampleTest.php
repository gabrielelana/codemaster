<?php

namespace Codemaster;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $example = new Example();
        $this->assertEquals(2, $example->add(1, 1));
    }
}
