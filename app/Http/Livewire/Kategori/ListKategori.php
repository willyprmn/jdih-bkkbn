<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class ListKategori extends Component
{
    public function render()
    {
        return view('livewire.kategori.list',[
            'kategori' => Kategori::orderBy('id', 'asc')->get()
        ]);
    }
}
