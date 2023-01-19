<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;
use App\Models\Status;

class ListStatus extends Component
{
    public function render()
    {
        return view('livewire.status.list',[
            'status' => Status::orderBy('id', 'asc')->get()
        ]);
    }
}
