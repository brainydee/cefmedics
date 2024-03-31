<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('pages.appointment');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'speciality'  => ['required', 'string'],
            'reason'      => ['required'],
            'address'     => ['required'],
        ]);

        $path = null;
        if($request->hasFile('file')){
            $path = Storage::putFile('documents', $request->file('file'));
        }

        $validated['file_path'] = $path;
        $validated['user_id']   = auth()->user()->id;
        Appointment::create($validated);
    }
}

