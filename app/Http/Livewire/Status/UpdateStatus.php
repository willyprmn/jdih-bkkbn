<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;
use App\Models\Status;

class UpdateStatus extends Component
{
    public $status_id;
    public $status_name;

    public function mount($id)
    {
        $status = Status::find($id);
        
        if($status) {
            $this->status_id    = $status->id;
            $this->status_name  = $status->status_name;
        }
    }

    public function render()
    {
        return view('livewire.status.edit');
    }

    public function update()
    {
        $data = $this->validate([
            'status_name' => 'required'
        ]);

        if($this->status_id) {

            $status = Status::find($this->status_id);
            
            if($status) {
                $status->update([
                    'status_name'     => $this->status_name
                ]);
            }
        }

        session()->flash('message', 'Data Berhasil Diubah');
        return redirect('status-list');
    }
}
