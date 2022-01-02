<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textarea extends Component
{
    public $title;
    public $description;
    public $name;
    
    public function __construct($title, $description=null, $name)
    {
        $this->title = $title;
        $this->description = $description;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
