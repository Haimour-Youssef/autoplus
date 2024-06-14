<?php

namespace App\View\Components;

use Illuminate\View\Component;

class optionsList extends Component
{
    public $items;
    public $type = 'id';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items = null,$type = 'id')
    {
        $this->items = $items;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.optionsList');
    }
}
