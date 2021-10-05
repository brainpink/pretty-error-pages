<?php

namespace Creativeorange\PrettyErrorPages\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MainErrorPage extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return View
     */
    public function render()
    {
        return view('errors.layouts.main');
    }
}
