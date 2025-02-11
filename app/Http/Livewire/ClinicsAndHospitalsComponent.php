<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Livewire\Component;


class ClinicsAndHospitalsComponent extends Component
{
    public function render()
    {
         $slides = HomeSlider::where('status',1)->get();
        return view('livewire.clinicsandhospitals-component',['slides'=>$slides]);
    }
}
