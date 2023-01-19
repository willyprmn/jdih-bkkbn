<?php

namespace App\Http\Livewire\Dokumen;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Dokumen;
use App\Models\Kategori;
use App\Models\Status;

class CreateDokumen extends Component
{
    // public $showDiv = false;
    use WithFileUploads;

    public $judul;
    public $kategori_id;
    public $tentang;
    public $nomor;
    public $status_id;
    public $per_cabut;
    public $tahun;
    public $tanggal;
    public $fileUpload;
    public $deskripsi;

    public function render()
    {
        return view('livewire.dokumen.create',[
            'kategori' => Kategori::first()->get(),
            'status' => Status::first()->get(),
            'dokumen' => Dokumen::where('status_id', '!=', '3')->get()
        ]);
    }

    // public function openDiv()
    // {
    //     $this->showDiv =! $this->showDiv;
    // }

    public function submit()
    {
        $data = $this->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'nomor' => 'required',
            'status_id' => 'required',
            'tahun' => 'required',
            'tanggal' => 'required',
            'fileUpload' => 'required'
        ]);
        $data['tanggal'] = Carbon::parse($this->tanggal)->format('Y-m-d');
        $data['status_id'] == '3' ? $data['per_cabut'] = null : $data['per_cabut'] = $this->per_cabut;  
        $data['file_name'] = $this->fileUpload->getClientOriginalName();

        dd($data);
        Dokumen::create($data);

        session()->flash('message', 'Data Berhasil Disimpan');
        return redirect('dokumen-list');
        // $validatedData = $this->validate();
        // $folderName    = 'public/files/' . $this->user->name . '_' . \Str::slug($this->user->real_name, '_');
        // $newFilePrefix = $this->date . $jamMulai . '-' . $jamselesai;

        // $data = [
        //     'kategori'      => $this->katSelected,
        //     'judul'         => $this->judul,
        //     'tentang'       => $this->tentang,
        //     'nomor'         => $this->noper,
        //     'status_akhir'  => $this->katStatus,
        //     'perCabut'      => $this->perCabut,
        //     'tahun'         => $this->tahun,
        //     'tanggal'       => $this->tglPenetapan,
        //     'deskripsi'     => $this->abstrak,
        //     'file'          => $this->fileUpload->getClientOriginalExtension(),
            
            
        // ];

        // dd($data);
    }
}
