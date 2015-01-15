<?php

use Intervention\Image\Gd\Container;

class GdContainerTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    public function testSetGetCore()
    {
        $container = new Container;
        $container->setCore('foo');
        $this->assertEquals('foo', $container->getCore());
    }

    public function testCountFrames()
    {
        $container = new Container;
        $container->addFrames(array('foo', 'bar', 'baz'));
        $this->assertEquals(3, $container->countFrames());
    }
}
