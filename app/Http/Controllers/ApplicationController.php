<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreapplicationRequest;
use App\Http\Requests\UpdateapplicationRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kelgan_arizalar.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreapplicationRequest $request)
    {
        
        $tmp_file = TemporaryFile::where('folder', $request->document)->first();
       
        if ($tmp_file) {
            Storage::copy('document/tmp/' . $tmp_file->folder . '/' . $tmp_file->file, 'documents/' . $tmp_file->folder . '/' . $tmp_file->file);           
        }

        Storage::deleteDirectory('documen/tmp/' . $tmp_file->folder);
        $tmp_file->delete();
       
        do {
            $code = random_int(1000000, 9999999);
        } while (Application::where('number_generation', $code)->exists());

        $validatedData = $request->validated();

        $validatedData['pass_info'] = preg_replace('/[^a-zA-Z0-9]/', '', $request['pass_info']);
        $validatedData['telefon'] = preg_replace('/[^0-9]/', '', $request['telefon']);
        $validatedData['document'] = $tmp_file->folder . '/' . $tmp_file->filename;        
        $validatedData['number_generation'] = $code;
        $name = $validatedData['fish'];       
       
        dd($validatedData);
        Application::create($validatedData);         
        
        return redirect(route('confirm', ['code' => $code, 'name' => $name,]));

    }

    /**
     * Display the specified resource.
     */
    public function show(application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateapplicationRequest $request, application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(application $application)
    {
        //
    }

    
}
