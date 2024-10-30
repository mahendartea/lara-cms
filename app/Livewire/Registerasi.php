<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Registerasi extends Component
{
    use WithFileUploads;

    public $nik;
    public $name;
    public $nickname;
    public $email;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $gender;
    public $gol_darah;
    public $provinsi;
    public $kotakab;
    public $kecamatan;
    public $desa;
    public $alamat;
    public $alamat_saat_ini;
    public $lokasi;
    public $negara;
    public $agama;
    public $status_kawin;
    public $pekerjaan;
    public $telp;
    public $ktp;
    public $photo;

    public function save()
    {
        $this->validate([
            'nik' => 'required|numeric|digits:16|unique:members,nik',
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|in:laki-laki,perempuan',
            'gol_darah' => 'required|in:A,B,AB,O',
            'provinsi' => 'required|string|max:255',
            'kotakab' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'desa' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'alamat_saat_ini' => 'required|string|max:500',
            'lokasi' => 'required|string|max:255',
            'negara' => 'required|string|max:255',
            'agama' => 'required|string|max:255|in:islam,kristen,hindu,budha,konghucu,lainnya',
            'status_kawin' => 'required|in:lajang,menikah,cerai,duda,janda',
            'pekerjaan' => 'required|string|max:255',
            'telp' => 'required|numeric|digits_between:10,15',
            'ktp' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $member = Member::create([
            'nik' => $this->nik,
            'name' => $this->name,
            'nickname' => $this->nickname,
            'email' => $this->email,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'gender' => $this->gender,
            'gol_darah' => $this->gol_darah,
            'provinsi' => $this->provinsi,
            'kotakab' => $this->kotakab,
            'kecamatan' => $this->kecamatan,
            'desa' => $this->desa,
            'alamat' => $this->alamat,
            'alamat_saat_ini' => $this->alamat_saat_ini,
            'lokasi' => $this->lokasi,
            'negara' => $this->negara,
            'agama' => $this->agama,
            'status' => $this->status_kawin,
            'pekerjaan' => $this->pekerjaan,
            'telp' => $this->telp,
        ]);

        if ($this->photo) {
            $path = $this->photo->store('photos', 'public');
            $member->update([
                'foto' => $path,
            ]);
        }

        if ($this->ktp) {
            $path = $this->ktp->store('ktp', 'public');
            $member->update([
                'ktp' => $path,
            ]);
        }
        return redirect()->route('registerasi')->with('success', 'Data berhasil Dikirim!');
    }

    public function render()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $dataprov = json_decode($response->getBody()->getContents());

        return view('livewire.registerasi', compact('dataprov'));
    }
}
