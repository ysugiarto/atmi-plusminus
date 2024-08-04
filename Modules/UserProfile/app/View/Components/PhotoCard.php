<?php

namespace Modules\UserProfile\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PhotoCard extends Component
{
    public $person;
    /**
     * Create a new component instance.
     */
    public function __construct($person)
    {
        $this->person = $person;
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('userprofile::components.photocard');
    }
}
