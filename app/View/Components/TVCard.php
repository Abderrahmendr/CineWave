<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TvCard extends Component
{
    public $tvshow;

    public function __construct($tvshow)
    {
        $this->tvshow=$tvshow;
    }

    public function render(): View|Closure|string
    {
        return view('components.tv-card');    }
}
