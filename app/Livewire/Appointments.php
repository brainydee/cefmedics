<?php

namespace App\Livewire;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Appointments extends Component
{
    use WithPagination, WithFileUploads;

    public $file;
    public $appointment_id;

    protected $rules = [
        'file' => 'required|file|max:2048', 
    ];

    public function updatedFile()
    {
        $this->validateOnly('file');
    }

    public function openModal($id)
    {
        $this->appointment_id = $id;
    }

    public function downloadFile($filePath)
    {
    
        $fullPath = storage_path('app/' . $filePath);

        if (file_exists($fullPath)) {
            return response()->download($fullPath);
        }

        toastr()
        ->progressBar(false)
        ->addError('Something went wrong please try again later.');
         return redirect()->back();
    }

    public function saveFile()
    {
        $this->validate();

        try {
            $path = $this->file->store('files');
            $appointement = Appointment::find($this->appointment_id);
            $appointement->file_path = $path;
            $appointement->save();
            // Clear the file input after successful upload
            $this->file = null;
            $this->appointment_id = null;
            toastr()
            ->persistent()
            ->closeButton()
            ->addSuccess('file uploaded successfully');
            return redirect(route('appointments'));
        } catch (\Throwable $th) {
            toastr()
            ->progressBar(false)
            ->addError('Something went wrong please try again later.');
            return redirect()->back();
        }
        
    }

    public function render()
    {
        $appointmentsQuery = auth()->user()->user_type == 'Admin' ? Appointment::query() : auth()->user()->appointments();

        $appointments = $appointmentsQuery->simplePaginate(10);
        return view('livewire.appointments', ['appointments' => $appointments])->layout('dashboard.layout.app');
    }
}
