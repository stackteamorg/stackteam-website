<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Style extends Component
{
    /**
     * Create a new component instance.
     */

    public $link = null;

    public function __construct($link=null,$list="default")
    {
        $this->link = $link;

        if ($list == "default") {

            $this->link = [
                'assets/css/vendor/bootstrap.rtl.min.css',
                'assets/css/vendor/font-awesome.css',
                'assets/css/vendor/slick.css',
                'assets/css/vendor/slick-theme.css',
                'assets/css/vendor/sal.css',
                'assets/css/vendor/magnific-popup.css',
                'assets/css/vendor/green-audio-player.min.css',
                'assets/css/vendor/odometer-theme-default.css',
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.style');
    }
}
