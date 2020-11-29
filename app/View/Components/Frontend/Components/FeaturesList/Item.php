<?php

namespace App\View\Components\Frontend\Components\FeaturesList;

use Illuminate\View\Component;

class Item extends Component
{
    public $icon;
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $icon, String $text)
    {
        $this->icon = $icon;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.components.features-list.item');
    }
}
