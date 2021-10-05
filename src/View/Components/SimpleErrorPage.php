<?php

namespace Creativeorange\PrettyErrorPages\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class SimpleErrorPage extends Component
{
    public function __construct(public $error, public $message, public $title)
    {
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return View
     */
    public function render()
    {
        return view('errors.layouts.simple');
    }
}
