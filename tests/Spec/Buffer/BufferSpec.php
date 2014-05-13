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

    function it_receives_a_string()
    {
        $this->setString('bar');

        $this->getString()->shouldReturn('bar');
    }

    function it_disallows_invalid_input()
    {
        $this->shouldThrow('InvalidArgumentException')->duringSetString(null);

        $this->shouldNotThrow('InvalidArgumentException')->duringSetString('bar');
    }

}
