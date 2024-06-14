<?php

namespace App\View\Components;

use Illuminate\View\Component;

class optionsPerPage extends Component
{
    public $count;
    public $selecte;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($count,$selecte)
    {
        $this->count = $count;
        $this->selecte = $selecte;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.optionsPerPage');
    }
}
