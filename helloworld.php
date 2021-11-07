<?php

/**
 * Enterprise Hello World class v2.2
 *
 * Provides an enterprise ready, scalable business solution
 * for displaying the phrase "Hello World!" in a console.
 *
 * TL;DW
 *
 * @author Miles
 * @copyright Miles 2021
 * @license MIT
 * @version 2.2
 * @see echo
 * @see README
 * @see LICENSE
 * @todo Test of OS compatibility
 * @link https://github.com/MilesChou/helloworld
 */
class HelloWorld
{
    /**
     * The first phrase
     */
    public const PHRASE_HELLO = 'Hello';

    /**
     * The second phrase
     */
    public const PHRASE_WORLD = 'World';

    /**
     * The first word in our phrase
     */
    private $hello;

    /**
     * The second word in our phrase
     */
    private $world;

    /**
     * Constructor
     *
     * @param string $hello First word to display in the console
     * @param string $world Second word to display in the console
     */
    public function __construct(string $hello, string $world)
    {
        $this->hello = $hello;
        $this->world = $world;
    }

    /**
     * Display the phrase "Hello World!" in a console
     *
     * @return void
     */
    public function sayPhrase(): void
    {
        // Displays our phrase in a console.
        $first = $this->hello;
        $second = $this->world;
        echo $first . ' ' . $second;
    }

    /**
     * Sets the phrase to use for hello
     *
     * @param string $h The first phrase
     */
    public function setHello(string $h): void
    {
        $this->hello = $h;
    }

    /**
     * Gets the phrase to use for hello
     *
     * @return string
     */
    public function getHello(): string
    {
        return $this->hello;
    }

    /**
     * Sets the phrase to use for world
     *
     * @param string $w The second phrase
     */
    public function setWorld(string $w): void
    {
        $this->world = $w;
    }

    /**
     * Gets the phrase to use for world
     *
     * @return string
     */
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * Main method
     *
     * @return void
     */
    public static function main()
    {
        // Display the phrase on the command line.
        try {
            $hw = new self(self::PHRASE_HELLO, self::PHRASE_WORLD);
            $hw->sayPhrase();
        } catch (LogicException $e) {
            echo 'This is logic error.';
        } catch (RuntimeException $e) {
            echo 'This is runtime error.';
        } catch (Exception $e) {
            echo 'This is unknown error.';
        }
    }
}

HelloWorld::main();

echo PHP_EOL;
