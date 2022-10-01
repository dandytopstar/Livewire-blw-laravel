<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeedbackSlider extends Component
{
    public int $currentSlider = 1;

    public array $sliders = [1, 2, 3, 4];

    public function slideSwitcher($slideNumber)
    {
        $this->currentSlider = $slideNumber;
    }
    
    public function render()
    {
        return view('livewire.feedback-slider');
    }
}
