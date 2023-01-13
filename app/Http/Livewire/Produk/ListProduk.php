<?php

namespace App\Http\Livewire\Produk;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Jenis;

class ListProduk extends Component
{
    

    public function render()
    {
        return view('livewire.produk.list',[
            'produks' => Produk::with('jenis')->get()
        ]);
    // $data = Produk::with('jenis')->get();
    // dd($data);
    }
}
