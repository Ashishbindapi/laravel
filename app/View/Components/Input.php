<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $lable;
    public $demo;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$lable,$type,$demo =0)
    {
        $this->name = $name;
        $this->lable = $lable;
        $this->type = $type;
        $this->demo = $demo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
