<?php

namespace App\View\Components;

use App\Models\Process;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProcessList extends Component
{
    /**
     * Create a new component instance.
     */

    public $process = null;

    public function __construct()
    {
        $this->process = Process::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.process-list');
    }
}
