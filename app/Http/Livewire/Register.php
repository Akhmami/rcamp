<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participant;

class Register extends Component
{
    public $nama;
    public $jenis_kelamin;
    public $kelas;
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
        'kelas' => 'required|numeric',
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

        $participant = Participant::create($validatedData);

        return redirect()->route('payment', $participant->no_pendaftaran);
    }
}
