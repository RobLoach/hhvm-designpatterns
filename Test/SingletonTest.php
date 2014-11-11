<?hh

namespace RobLoach\DesignPatterns\Test;

use RobLoach\DesignPatterns\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSingleton() {
        $singleton = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();
        $this->assertEquals($singleton, $singleton2);
    }
}
