<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SingleService extends Component
{
    /**
     * Create a new component instance.
     */

    public $name = null;
    public $title = null;
    public $subtitle = null;

    public function __construct($service = null)
    {
        $this->name = $service->name;
        $this->title = $service->title;
        $this->subtitle = $service->subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.single-service');
    }
}
