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
    public $path = "assets/";

    public function __construct($link=null,$list="",$defpath=true)
    {

        $this->link = $defpath ? $this->path . $link : $link;

        if ($list == "default") {

            $this->link = [
                $this->path . 'css/vendor/bootstrap.rtl.min.css',
                $this->path . 'css/vendor/font-awesome.css',
                $this->path . 'css/vendor/slick.css',
                $this->path . 'css/vendor/slick-theme.css',
                $this->path . 'css/vendor/sal.css',
                $this->path . 'css/vendor/magnific-popup.css',
                $this->path . 'css/vendor/green-audio-player.min.css',
                $this->path . 'css/vendor/odometer-theme-default.css',
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
