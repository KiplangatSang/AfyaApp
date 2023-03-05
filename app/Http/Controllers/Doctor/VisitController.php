<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Visits;
use Illuminate\Http\Request;

class VisitController extends BaseController
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
        $visits = $this->doctor()->visits()
            ->with('appointment')
            ->with('doctor.user')
            ->with('diagnosis')
            ->with('hospital')
            ->get();


        $visitsdata['visits'] = $visits;
        return view('doctor.visits.index', compact('visitsdata'));
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
        $visit = $this->doctor()->visits()
            ->where('id', $id)
            ->with('appointment')
            ->with('doctor.user')
            ->with('diagnosis')
            ->with('hospital')
            ->first();
        $visitdata['visit'] = $visit;
        return view('doctor.visits.show', compact('visitdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //s
        $visit = $this->doctor()->visits()->where('id', $id)->first();
        $visitdata['visit'] = $visit;
        return view('doctor.visits.edit', compact('visitdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $visit = $this->doctor()->visits()->where('id', $id)->first();

        $result = $visit->update(
            $request->except(['_method', '_token'])
        );
        if (!$result)
            return back()->with('error', 'This item could not be updated');
        return redirect(route('doctor.visits.show', ['visit' => $id]))->with('success', 'This item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $result =  Visits::destroy($id);

        if (!$result)
            return back()->with('error', 'This item could not be deleted');
        return redirect(route('doctor.visits.index'))->with('success', 'This item has been deleted successfully');
    }
}

