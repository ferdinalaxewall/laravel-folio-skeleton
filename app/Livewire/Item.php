<?php

namespace App\Livewire;

use Livewire\Component;

class Item extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.item');
    }
}
