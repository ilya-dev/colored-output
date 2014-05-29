<?php namespace Spec\ColoredOutput;

use PhpSpec\ObjectBehavior;

class RendererSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('ColoredOutput\Renderer');
    }

}
