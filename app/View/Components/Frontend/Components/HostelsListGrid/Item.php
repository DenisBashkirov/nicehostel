<?php

namespace App\View\Components\Frontend\Components\HostelsListGrid;

use Illuminate\View\Component;

class Item extends Component
{
    public $hostel;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($hostel)
    {
        $this->hostel = $hostel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.components.hostels-list-grid.item');
    }
}
