<?php

namespace App\View\Components;

use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceIndex extends Component
{
    /**
     * Create a new component instance.
     */

    public $services = null;

    public function __construct()
    {
        // get services 
        $this->services = Service::where('is_primary',true)->get();
        // end get services

        //print_r($this->services->toArray());die();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service-index');
    }
}
