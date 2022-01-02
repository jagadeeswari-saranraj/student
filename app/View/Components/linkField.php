<?php

namespace App\View\Components;

use Illuminate\View\Component;

class linkField extends Component
{
    public $color;
    public $link;
    public $title;
    
    public function __construct($color, $link, $title)
    {
        $this->color = $color;
        $this->link = $link;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link-field');
    }
}
