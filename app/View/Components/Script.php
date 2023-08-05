<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Script extends Component
{
    /**
     * Create a new component instance.
     */

    public $link = null;
    public $path = "assets/";

    public function __construct($link=null,$path="assets/")
    {
        $this->path = $path;
        $this->link = $this->path . $link ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.script');
    }
}
