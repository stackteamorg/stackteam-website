<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Termynal extends Component
{
    /**
     * Create a new component instance.
     */

    public $holder = null;

    public function __construct($holder="termynal")
    {
        $this->holder = $holder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.termynal');
    }
}
