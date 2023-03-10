<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $text;
    public $img;
    public $delay;
    public $link;

    public function __construct($title,$text,$img,$delay,$link)
    {
        //
        $this->title=$title;
        $this->text=$text;
        $this->img=$img;
        $this->delay=$delay;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service.service-item');
    }
}
