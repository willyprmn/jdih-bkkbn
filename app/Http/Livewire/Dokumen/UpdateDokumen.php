<?php

namespace App\Http\Livewire\Dokumen;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Dokumen;
use App\Models\Jenis;

class UpdateDokumen extends Component
{
    use WithFileUploads;

    public $judul;
    public $katSelected;
    public $tentang;
    public $noper;
    public $katStatus;
    public $perCabut;
    public $tahun;
    public $tglPenetapan;
    public $fileUpload;
    public $abstrak;

    public function render()
    {
        return view('livewire.produk.create',[
            'kategoris' => Jenis::first()->get(),
            'produks' => Produk::first()->get()
        ]);
    }
    public function submit()
    {
        // $validatedData = $this->validate();
        // $folderName    = 'public/files/' . $this->user->name . '_' . \Str::slug($this->user->real_name, '_');
        // $newFilePrefix = $this->date . $jamMulai . '-' . $jamselesai;

        $data = [
            'kategori'      => $this->katSelected,
            'judul'         => $this->judul,
            'tentang'       => $this->tentang,
            'nomor'         => $this->noper,
            'status_akhir'  => $this->katStatus,
            'perCabut'      => $this->perCabut,
            'tahun'         => $this->tahun,
            'tanggal'       => $this->tglPenetapan,
            'deskripsi'     => $this->abstrak,
            'file'          => $this->fileUpload->getClientOriginalExtension(),
            
            
        ];

        dd($data);

    }
}
