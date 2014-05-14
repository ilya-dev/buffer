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

        // We store the end result here.
        $pieces = [];

        // We append all incoming characters to the $buffer
        // and move its content to $pieces
        // when the $separator is reached.
        $buffer = '';

        // Indicates whether the incoming character
        // should not be treated as a separator.
        $switch = false;

        // We split the string into an array of characters
        // and loop through it.
        foreach (str_split($this->string) as $character)
        {
            // If the character is a switch, invert $context and skip.
            if ($this->isSwitch($character))
            {
                $switch = ! $switch;

                continue;
            }

            // If the character is equal to the separator,
            // and the $switch is set to false.
            if (($character) == $separator and ! $switch)
            {
                // Copy the buffer's value to $pieces.
                // Clean the buffer.
                $pieces[] = $buffer;

                $buffer = '';
            }
            else
            {
                // Append to the buffer.
                $buffer .= $character;
            }
        }

        // If the buffer is not empty,
        // copy its value to $pieces.
        if ($buffer)
        {
            $pieces[] = $buffer;
        }

        return $pieces;
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
     * Determine whether the given character is a "switch".
     *
     * @param string $character
     * @return boolean
     */
    protected function isSwitch($character)
    {
        return in_array($character, $this->switchCharacters, true);
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

