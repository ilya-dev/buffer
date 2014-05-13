<?php namespace Spec\Buffer;

use PhpSpec\ObjectBehavior;

class BufferSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Buffer\Buffer');
    }

}
