<?php

namespace App\Livewire;

use App\Models\Menu;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $menu = Menu::all();
        return view('livewire.home', compact('menu'));
    }
}
