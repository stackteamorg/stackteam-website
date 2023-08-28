<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProcessItem extends Component
{
    /**
     * Create a new component instance.
     */

    public $counter = 0;
    public $title = null;
    public $subtitle = null;

    public function __construct($counter,$item)
    {
        $this->counter = $counter;
        $this->title = $item->title;
        $this->subtitle = $item->subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.process-item');
    }
}
