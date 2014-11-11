<?hh

namespace RobLoach\DesignPatterns\Test;

use RobLoach\DesignPatterns\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory() {
        $factory = new Factory('\stdClass');
        $object = $factory->create();
        $object->foo = 'bar';
        $expected = array('foo' => 'bar');
        $this->assertEquals((object)$expected, $object);
    }
}
