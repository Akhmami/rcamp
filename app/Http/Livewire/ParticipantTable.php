<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Participant;

class ParticipantTable extends DataTableComponent
{
    protected $model = Participant::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("No. Pendaftaran", "no_pendaftaran")
                ->sortable(),
            Column::make("Nama Lengkap", "nama")
                ->sortable(),
            Column::make("JK", "jenis_kelamin")
                ->sortable(),
            Column::make("Ukuran Baju", "ukuran_baju")
                ->sortable(),
            Column::make("Asal Sekolah")
                ->sortable(),
            Column::make("Tgl Daftar", "created_at")
                ->sortable(),
        ];
    }
}
