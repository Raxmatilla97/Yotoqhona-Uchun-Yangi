<?php

namespace App\Http\Controllers;

use App\Models\Application;
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
        // $data = $request->validate([
        //     // 'name' => 'required|max:255',
        //     'holat' => 'required|max:255',
        //     // 'pass_info' => 'required|max:255',
        //     // 'telefon' => 'required|max:255',
        //     // 'fakultet' => 'required|max:255',
        //     // 'yonalish' => 'required|max:255',
        //     // 'kurs_nomeri' => 'required|max:255',
        //     // 'guruhi' => 'required|max:255',
        //     // 'mezon' => 'required|max:255',          
        // ]);

       
        dd($request);
        // $newApplication = Application::create($newApplication);

        // return redirect(route('site'));
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
