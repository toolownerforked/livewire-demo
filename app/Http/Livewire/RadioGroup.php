<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RadioGroup extends Component
{
    public $data;

    public function loadData()
    {
        $this->data = [
            'element1'
        ];

        $this->dispatchBrowserEvent('data-loaded');
    }

    public function render()
    {
        return view('livewire.radio-group');
    }
}
