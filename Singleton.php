<?hh

namespace RobLoach\DesignPatterns;

/**
 * Ensure a class has only one instance, and provide a global point of access
 * to it.
 */
class Singleton
{
    /**
     * Protected constructor to ensure there are no instantiations.
     */
    protected function __construct() {}

    /**
     * The singleton instance of the class.
     */
    protected static $instance;

    /**
     * Retrieves the singleton instance.
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
