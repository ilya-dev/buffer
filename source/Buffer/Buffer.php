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

}
