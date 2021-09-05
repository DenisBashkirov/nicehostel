<?php

namespace App\View\Components\Frontend\Components\Button;

use Illuminate\View\Component;

class White extends Component
{
    public $fontSize;
    public $text;
    public $link;
    public $class;

    /**
     * Create a new component instance.
     *
     * @param  string  $color
     * @param  string  $fontSize
     * @return void
     */
    public function __construct($fontSize, $text, $link, $class = null)
    {
        $this->fontSize = $fontSize;
        $this->text = $text;
        $this->link = $link;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.components.button.white');
    }
}
