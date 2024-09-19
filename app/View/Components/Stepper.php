<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stepper extends Component
{
    public $activeStep;

    public function __construct($activeStep)
    {
        $this->activeStep = $activeStep;
    }

    public function render()
    {
        return view('components.stepper');
    }
}
