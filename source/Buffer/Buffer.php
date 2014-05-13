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
        $this->disallowInvalidInput($separator);
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
     * @param string $string
     * @return void
     */
    public function setString($string)
    {
        $this->disallowInvalidInput($string);

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
        $this->disallowInvalidInput($switchCharacter);

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

    /**
     * Throw an exception if the input is not a string.
     *
     * @throws InvalidArgumentException
     * @param mixed $input
     * @return void
     */
    protected function disallowInvalidInput($input)
    {
        // We perform a type check
        // to avoid any potential bugs.
        // Make sure to convert everything you pass
        // to __construct, explode or setString to a string.

        if ( ! is_string($input))
        {
            throw new InvalidArgumentException(
                'Expected to receive a string, but got '.gettype($input)
            );
        }
    }

}

