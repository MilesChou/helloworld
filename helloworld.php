<?php

/**
 * Hello world class
 *
 * Used to display the phrase "Hello World!" in a console.
 *
 * @author Miles
 */
class HelloWorld
{
    /**
     * The phrase to display in the console
     */
    public const PHRASE = 'Hello World!';

    /**
     * Main method
     *
     * @return void
     */
    public static function main(): void
    {
        // Displays our phrase in a console.
        echo self::PHRASE;
    }
}

HelloWorld::main();

echo PHP_EOL;
