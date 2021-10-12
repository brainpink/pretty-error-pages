<?php

namespace Creativeorange\PrettyErrorPages\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class SimpleErrorPage extends Component
{
    public $error;
    public $message;
    public $title;

    public function __construct($error, $message, $title)
    {
        $this->title = $title;
        $this->message = $message;
        $this->error = $error;
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
