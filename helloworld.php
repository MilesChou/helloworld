<?php

/**
 * Hello world class
 *
 * Used to display the phrase "Hello World!" in a console.
 *
 * @author Miles
 * @license MIT
 * @version 1.2
 * @see echo
 * @see README
 * @todo Create factory methods
 * @link https://github.com/MilesChou/helloworld
 */
class HelloWorld
{
    /**
     * The default phrase to display in the console
     */
    public const PHRASE = 'Hello World!';

    /**
     * The phrase to display in the console
     */
    private $hello_world;

    /**
     * Constructor
     *
     * @param string $hw The phrase to display in the console
     */
    public function __construct(string $hw)
    {
        $this->hello_world = $hw;
    }

    /**
     * Display the phrase "Hello World!" in a console
     *
     * @return void
     */
    public function sayPhrase(): void
    {
        // Displays our phrase in a console.
        echo $this->hello_world;
    }

    /**
     * Main method
     *
     * @return void
     */
    public static function main()
    {
        $hw = new self(self::PHRASE);

        try {
            $hw->sayPhrase();
        } catch (Exception $e) {
            // Do nothing!
        }
    }
}

HelloWorld::main();

echo PHP_EOL;
