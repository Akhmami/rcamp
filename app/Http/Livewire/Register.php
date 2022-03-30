<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;

class Register extends Component
{
    public $nama;
    public $jenis_kelamin;
    public $usia;
    public $ukuran_baju;
    public $asal_sekolah;
    public $no_wa_ayah;
    public $no_wa_ibu;
    public $alamat;

    protected $rules = [
        'nama' => 'required|max:150',
        'jenis_kelamin' => 'required',
        'usia' => 'required',
        'ukuran_baju' => 'required',
        'asal_sekolah' => 'required|max:150',
        'no_wa_ayah' => 'required|max:16',
        'no_wa_ibu' => 'required|max:16',
        'alamat' => 'required|max:250'
    ];

    public function render()
    {
        return view('livewire.register');
    }

    public function store()
    {
        $validatedData = $this->validate();
        $validatedData['no_pendaftaran'] = mt_rand(100000, 999999);

        Participant::create($validatedData);

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Pendaftaran berhasil',
            'text' => 'Informasi lainnya telah kami kirimkan melalui nomor WA ibunda, mohon dilakukan pengecekan atau hubungi kami jika ada kendala.',
        ]);
    }
}
