<?php namespace ColoredOutput;

class Renderer {

    /**
     * The foreground colors.
     *
     * @var array
     */
    protected $foreground = [
        'black'        => '',
        'dark_gray'    => '',
        'blue'         => '',
        'light_blue'   => '',
        'green'        => '',
        'light_green'  => '',
        'cyan'         => '',
        'light_cyan'   => '',
        'red'          => '',
        'light_red'    => '',
        'purple'       => '',
        'light_purple' => '',
        'brown'        => '',
        'yellow'       => '',
        'light_gray'   => '',
        'white'        => '',
    ] ;

    /**
     * Render a message with given colors.
     *
     * @param string $message
     * @param string|null $foreground
     * @param string|null $background
     * @return string
     */
    public function render($message, $foreground = null, $background = null)
    {

    }

}
