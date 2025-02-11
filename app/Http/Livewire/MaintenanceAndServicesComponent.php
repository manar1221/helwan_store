<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Livewire\Component;


class MaintenanceAndServicesComponent extends Component
{
    public function render()
    {
         $slides = HomeSlider::where('status',1)->get();
        return view('livewire.maintenanceandservices-component',['slides'=>$slides]);
    }
}
