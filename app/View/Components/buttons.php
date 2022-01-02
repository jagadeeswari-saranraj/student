<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buttons extends Component
{
    public $color;
    public $title;
    
    public function __construct($color, $title)
    {
        $this->color = $color;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons');
    }
}
