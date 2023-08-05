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

    public function __construct($link=null,$list="",$defpath=true)
    {
        $this->link = $defpath ? $this->path . $link : $link;

        if ($list == "default") {

            $this->link = [
                $this->path . 'js/vendor/jquery-3.6.0.min.js',
                $this->path . 'js/vendor/bootstrap.min.js',
                $this->path . 'js/vendor/isotope.pkgd.min.js',
                $this->path . 'js/vendor/imagesloaded.pkgd.min.js',
                $this->path . 'js/vendor/odometer.min.js',
                $this->path . 'js/vendor/jquery-appear.js',
                $this->path . 'js/vendor/slick.min.js',
                $this->path . 'js/vendor/sal.js',
                $this->path . 'js/vendor/jquery.magnific-popup.min.js',
                $this->path . 'js/vendor/js.cookie.js',
                $this->path . 'js/vendor/jquery.style.switcher.js',
                $this->path . 'js/vendor/jquery.countdown.min.js',
                $this->path . 'js/vendor/tilt.js',
                $this->path . 'js/vendor/green-audio-player.min.js',
                $this->path . 'js/vendor/jquery.nav.js',
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.script');
    }
}
