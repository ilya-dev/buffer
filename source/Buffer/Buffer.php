<?php namespace Buffer;

use InvalidArgumentException;

class Buffer {

    /**
     * The string we work with.
     *
     * @var string
     */
    protected $string;

    /**
     * The array of characters that act like a "switch".
     *
     * @var array
     */
    protected $switchCharacters = [];

    /**
     * The constructor.
     *
     * @param string $string
     * @return Buffer
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * Get the string we work with.
     *
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Set the string you want to work with.
     *
     * @throws InvalidArgumentException
     * @param string $string
     * @return void
     */
    public function setString($string)
    {
        // We perform a type check
        // to avoid any potential bugs.
        // Make sure to convert everything you pass
        // to __construct or setString to a string.

        if ( ! is_string($string))
        {
            throw new InvalidArgumentException(
                'Expected to receive a string, but got '.gettype($string)
            );
        }

        $this->string = $string;
    }

    /**
     * Add a new character.
     *
     * @param string $switchCharacter
     * @return void
     */
    public function beAwareOf($switchCharacter)
    {
        $this->switchCharacters[] = $switchCharacter;
    }

    /**
     * Get the array of "switches".
     *
     * @return array
     */
    public function getSwitchCharacters()
    {
        return $this->switchCharacters;
    }

}
