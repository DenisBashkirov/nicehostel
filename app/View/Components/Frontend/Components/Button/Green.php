<?php

namespace App\View\Components\Frontend\Components\Button;

use Illuminate\View\Component;

class Green extends Component
{
    public $fontSize;
    public $text;
    public $link;

    /**
     * Create a new component instance.
     *
     * @param  string  $color
     * @param  string  $fontSize
     * @return void
     */
    public function __construct($fontSize, $text, $link)
    {
        $this->fontSize = $fontSize;
        $this->text = $text;
        $this->link = $link;
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
