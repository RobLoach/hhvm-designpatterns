<?hh

namespace RobLoach\DesignPatterns\Test;

use RobLoach\DesignPatterns\AbstractFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
    * @expectedException Exception
    * @todo Exception thrown: Hack doesn't support creating new instances of T.
    */
    public function testAbstractFactory() {
        $factory = new AbstractFactory<array>();
        $array = $factory->create();
        $array['foo'] = 'bar';
        $expected = array('foo' => 'bar');
        $this->assetEquals($expected, $array);
    }
}