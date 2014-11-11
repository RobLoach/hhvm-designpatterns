<?hh

namespace RobLoach\DesignPatterns;

/**
 * Create families of objects without specifying their concrete classes.
 */
class AbstractFactory<T>
{
    /**
     * Instantiate a new object of the given T type.
     */
    public function create(): T
    {
        // @todo Hack does not currently support creating new instances of T.
        //return new T();
        throw new \Exception('Hack does not currently support creating new instances of T.');
    }
}
