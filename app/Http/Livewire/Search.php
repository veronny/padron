<?php

namespace App\Http\Livewire;

use App\Models\Padron;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public $open = false;

    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Padron::where('NRO_DOCUMENTO','=',$this->search)->get();
    }
}
