<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{

    /**
     * Create a new component instance.
     */
    public $title;
    public $navbar;
    public function __construct($title = "Page", $navbar = 'true')
    {
        $this->title = $title;
        $this->navbar = $navbar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout', ['title' => $this->title, 'navbar' => $this->navbar]);
    }
}
