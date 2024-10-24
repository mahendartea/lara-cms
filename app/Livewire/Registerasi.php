<?php

namespace App\Livewire;

use Livewire\Component;

class Registerasi extends Component
{
    public $nik = 1;
    public $name;
    public $nickname;

    public function submit() {}

    public function render()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $provinsi = json_decode($response->getBody()->getContents());

        return view('livewire.registerasi', compact('provinsi'));
    }
}
