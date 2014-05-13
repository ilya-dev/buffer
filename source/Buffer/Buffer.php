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
     * Split a string into pieces.
     *
     * @param string $separator
     * @return array
     */
    public function explode($separator)
    {
        // Check out the explanation below
        // if you have no idea what's going on.

        if ( ! is_string($separator))
        {
            throw new InvalidArgumentException(
                'Expected to receive a string, but got '.gettype($separator)
            );
        }
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
     * @throws InvalidArgumentException
     * @param string $switchCharacter
     * @return void
     */
    public function beAwareOf($switchCharacter)
    {
        // See the notice above regarding type checks.
        // You got it, just hold the Page Up button.

        if ( ! is_string($switchCharacter))
        {
            throw new InvalidArgumentException(
                'Expected to receive a string, but got '.gettype($switchCharacter)
            );
        }

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
