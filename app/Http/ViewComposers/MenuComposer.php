<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class MenuComposer {

    public function compose(View $view) {
  

        $view->with([
            '' => ''
        ]);

    }
}