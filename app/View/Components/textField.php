<?php

namespace App\View\Components;

use Illuminate\View\Component;

class textField extends Component
{
    public $title;
    public $value;
    public $name;
    
    public function __construct($title, $value=null, $name)
    {
        $this->title = $title;
        $this->value = $value;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-field');
    }
}
