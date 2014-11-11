<?hh

namespace RobLoach\DesignPatterns;

/**
 * Creates a single object, and lets subclasses decide which class to instantiate.
 */
class Factory
{
    /**
     * Constructor which takes in the name of the class of objects to create.
     */
    public function __construct(protected string $className) {}

    /**
     * Instantiate a new object of the given class name.
     */
    public function create()
    {
        return new $this->className();
    }
}
