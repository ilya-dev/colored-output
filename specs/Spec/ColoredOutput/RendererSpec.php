<?php namespace Spec\ColoredOutput;

use PhpSpec\ObjectBehavior;

class RendererSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('ColoredOutput\Renderer');
    }

    function it_renders_a_message()
    {
        $this->render('Hello, world!', 'red', 'green')
             ->shouldBe('\033[0;31m\033[42mHello, world!\033[0m');
    }

}
