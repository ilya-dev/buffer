<?php namespace Spec\Buffer;

use PhpSpec\ObjectBehavior;

class BufferSpec extends ObjectBehavior {

    function let()
    {
        $this->beConstructedWith('foo');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Buffer\Buffer');
    }

}
