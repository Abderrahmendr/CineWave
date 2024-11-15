<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TVCard extends Component
{
    public $popularShows;
    public function __construct($popularShows)
    {
        $this->popularShows= $popularShows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.t-v-card');
    }
}
