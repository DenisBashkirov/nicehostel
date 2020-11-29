<?php

namespace App\View\Components\Frontend\Components\Button;

use Illuminate\View\Component;

class Green extends Component
{
    public $color;
    public $fontSize;
    public $text;

    /**
     * Create a new component instance.
     *
     * @param  string  $color
     * @param  string  $fontSize
     * @return void
     */
    public function __construct($color, $fontSize, $text)
    {
        $this->color = $color;
        $this->fontSize = $fontSize;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.components.button.green');
    }
}
