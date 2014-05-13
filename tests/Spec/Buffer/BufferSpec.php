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

    function it_disallows_an_invalid_string()
    {
        $this->shouldThrow('InvalidArgumentException')->duringSetString(null);

        $this->shouldNotThrow('InvalidArgumentException')->duringSetString('bar');
    }

    function it_receives_a_switch_character()
    {
        $this->beAwareOf('<');

        $this->getSwitchCharacters()->shouldReturn(['<']);
    }

    function it_disallows_an_invalid_character()
    {
        $this->shouldThrow('InvalidArgumentException')->duringBeAwareOf(null);

        $this->shouldNotThrow('InvalidArgumentException')->duringBeAwareOf('<');
    }

    function it_splits_a_string_correctly()
    {
        $this->setString('');
        $this->explode(':')->shouldReturn([]);

        $this->setString('foo:bar:baz');
        $this->explode(':')->shouldReturn(['foo', 'bar', 'baz']);

        $this->beAwareOf("\"");
        $this->setString('foo:"bar:baz"');
        $this->explode(':')->shouldReturn(['foo', 'bar:baz']);
    }

    function it_disallows_an_invalid_separator()
    {
        $this->shouldThrow('InvalidArgumentException')->duringExplode(null);

        $this->shouldNotThrow('InvalidArgumentException')->duringExplode(':');
    }

}

