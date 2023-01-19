<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class UpdateKategori extends Component
{
    public $kategori_id;
    public $kategori_name;

    public function mount($id)
    {
        $kategori = Kategori::find($id);
        
        if($kategori) {
            $this->kategori_id    = $kategori->id;
            $this->kategori_name  = $kategori->kategori_name;
        }
    }

    public function render()
    {
        return view('livewire.kategori.edit');
    }

    public function update()
    {
        $data = $this->validate([
            'kategori_name' => 'required'
        ]);

        if($this->kategori_id) {

            $kategori = Kategori::find($this->kategori_id);
            
            if($kategori) {
                $kategori->update([
                    'kategori_name'     => $this->kategori_name
                ]);
            }
        }

        session()->flash('message', 'Data Berhasil Diubah');
        return redirect('kategori-list');
    }
}
