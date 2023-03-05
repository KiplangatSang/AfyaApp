<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use Illuminate\Http\Request;

class DiagnosisController extends BaseController
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $diagnoses =  $this->doctor()->diagnosis()->with('doctor.user')->with('visit.appointment')->get();
        $diagnosesdata['diagnoses'] = $diagnoses;
        return view('doctor.diagnosis.index', compact('diagnosesdata'));
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
        $diagnosis = Diagnosis::where('id', $id)->with('doctor.user')->with('visit.diagnosis')->first();
        $diagnosisdata['diagnosis'] = $diagnosis;
        return view('doctor.diagnosis.show', compact('diagnosisdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $diagnosis = Diagnosis::where('id', $id)->first();
        $diagnosisdata['diagnosis'] = $diagnosis;
        return view('doctor.diagnosis.edit', compact('diagnosisdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $diagnosis = Diagnosis::where('id', $id)->first();

        $result = $diagnosis->update(
            $request->except(['_method', '_token'])
        );
        if (!$result)
            return back()->with('error', 'This item could not be updated');
        return redirect(route('doctor.diagnoses.show', ['diagnosis' => $id]))->with('success', 'This item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $result =  Diagnosis::destroy($id);
        if (!$result)
            return back()->with('error', 'This item could not be deleted');
        return redirect(route('doctor.diagnoses.index'))->with('success', 'This item has been deleted successfully');
    }
}

