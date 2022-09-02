<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeedbackSlider extends Component
{
    public int $currentSlider = 5;

    public array $sliders = [5, 6];

    public function slideSwitcher($slideNumber)
    {
        $this->currentSlider = $slideNumber;
    }
    
    public function render()
    {
        return view('livewire.feedback-slider');
    }
}
