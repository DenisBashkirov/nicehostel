<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;

class RoomCard extends Component
{
    public $room;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($room)
    {
        $this->room = $room;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.room-card');
    }
}
