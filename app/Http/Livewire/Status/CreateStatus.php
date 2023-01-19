<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;
use App\Models\Status;

class CreateStatus extends Component
{
    public $status_name;

    public function render()
    {
        return view('livewire.status.create');
    }

    public function submit()
    {
        $data = $this->validate([
            'status_name' => 'required'
        ]);

        Status::create($data);

        session()->flash('message', 'Data Berhasil Disimpan');
        return redirect('status-list');
    }
}
