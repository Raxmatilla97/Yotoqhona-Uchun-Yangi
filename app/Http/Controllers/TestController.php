<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function tmpUpload(Request $request) {
        // if ($request->hasFile('document')) {
        //     $file = $request->file('document');
        //     $filename = $file->getClientOriginalName();
        //     $folder = uniqid() . '-' . now()->timestamp;
        //     $file->storeAs('document/' . $folder, $filename);
        //     TemporaryFile::create([
        //         'folder' => $folder,
        //         'file' => $filename
        //     ]);
            
        //     return $folder;
        // }
        
        // return '';

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();            
            $folder = uniqid('document', true);
            $file->storeAs('document/tmp/' . $folder, $filename);
            TemporaryFile::create([
                'folder' => $folder,
                'file' => $filename
            ]);
           
            return $folder;
        }
        
        return '';
    }
}
