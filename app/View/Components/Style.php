<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\App;

class Style extends Component
{
    /**
     * Create a new component instance.
     */

    public $link = null;
    public $path = "assets/";
    public $lang = null;

    protected $rtlStylesheets = [
        'assets/css/vendor/bootstrap.min.css',
        'assets/css/app.css'
    ];

    public function __construct($link=null,$path='assets/',$lang=null)
    {

        $this->lang = $lang;
        $this->path = $path;

        $this->link = $this->path . $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $locale = App::currentLocale();

        if (in_array($this->link,$this->rtlStylesheets) && in_array($locale,['ar','fa'])) {
            $this->link = str_replace('.css','.rtl.css',$this->link);
        }

        if (!is_null($this->lang) && !App::isLocale($this->lang)) {
            return '';
        }
        return view('components.style');
    }
}
