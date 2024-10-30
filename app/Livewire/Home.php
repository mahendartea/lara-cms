<?php

namespace App\Livewire;

use App\Models\Galery;
use App\Models\Menu;
use App\Models\News;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $news = News::limit(3)->latest()->get();
        $galeri = Galery::limit(6)->latest()->get();
        return view('livewire.home', compact('news', 'galeri'));
    }
}
