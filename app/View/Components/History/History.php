<?php

namespace App\View\Components\History;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\OrdersModel;

class History extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public function __construct($data = "")
    {
        $this->data = OrdersModel::getHistoryByUserId();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.history.history', ['datas' => $this->data]);
    }
}
