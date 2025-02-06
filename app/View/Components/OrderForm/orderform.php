<?php

namespace App\View\Components\OrderForm;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\MenusModel;

class orderform extends Component
{
    /**
     * Create a new component instance.
     */
    public $menus;
    public function __construct()
    {
        $this->menus = MenusModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.order-form.orderform', ['menuData' => $this->menus]);
    }
}
