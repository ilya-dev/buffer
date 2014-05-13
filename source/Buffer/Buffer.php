<?php namespace Buffer;

class Buffer {

    /**
     * The string we work with.
     *
     * @var string
     */
    protected $string;

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
     * @param string $string
     * @return void
     */
    public function setString($string)
    {
        $this->string = $string;
    }

}
