<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class CreateKategori extends Component
{
    public $kategori_name;

    public function render()
    {
        return view('livewire.kategori.create');
    }

    public function submit()
    {
        $data = $this->validate([
            'kategori_name' => 'required'
        ]);

        Kategori::create($data);

        session()->flash('message', 'Data Berhasil Disimpan');
        return redirect('kategori-list');
    }
}
