<?php namespace Spec\ColoredOutput;

use PhpSpec\ObjectBehavior;

class FormatterSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('ColoredOutput\Formatter');
    }

    function it_formats_a_message()
    {
        $this->format('Hello, world!', 'red', 'green')
             ->shouldBe('\033[0;31m\033[42mHello, world!\033[0m');
    }

}
