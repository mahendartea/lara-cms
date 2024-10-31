<?php

namespace App\Livewire;

use App\Models\News;
use App\Models\Galery;
use Livewire\Component;

class Home extends Component
{
    public $selectedKategori = null;

    public function render()
    {
        // Query untuk galeri dengan filter kategori
        $galeriQuery = Galery::query();
        if ($this->selectedKategori) {
            $galeriQuery->where('kategori', $this->selectedKategori);
        }
        $galeri = $galeriQuery->latest()->take(6)->get();

        // Query untuk berita terbaru
        $news = News::latest()->take(3)->get();

        return view('livewire.home', [
            'galeri' => $galeri,
            'news' => $news
        ]);
    }

    public function filterKategori($kategori = null)
    {
        $this->selectedKategori = $kategori;
    }
}
