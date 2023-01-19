<?php

namespace App\Http\Livewire\Dokumen;

use Livewire\Component;
use App\Models\Dokumen;

class ListDokumen extends Component
{
    public function render()
    {
        return view('livewire.dokumen.list',[
            'dokumen' => Dokumen::with('kategori', 'status')->orderBy('id', 'desc')->get()
        ]);
    }
}
