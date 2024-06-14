<?php

namespace App\View\Components;

use Illuminate\View\Component;

class badge extends Component
{
    public $type = "dark";
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'danger')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.badge');
    }
}
