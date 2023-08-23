<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.locations.index', [
            'locations' => Location::all(),
            "name" => "All locations",
            // "locations" => Location::latest()->filter(request(['search']))->get()
        ]);
    }

    public function approved($id)
    {
        Location::where('id',$id)->update([
            'status'=>2,
        ]);

        return redirect('/dashboard/locations')->with('success', 'Location has been approved!');
    }

    public function declined($id)
    {
        Location::where('id',$id)->update([
            'status'=>3
        ]);

        return redirect('/dashboard/locations')->with('success', 'Location has been declined!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required|max:255',
        //     'status' => 1
        // ]);

        // Location::create($validatedData);

        // return redirect('/dashboard/locations')->with('success', 'New location has been added!');

        $location = Location::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => 1,
        ]);

        return redirect('/dashboard/locations')->with('success', 'New location has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return view('dashboard.locations.edit', [
            'location' => $location
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        Location::where('id', $location->id)
            ->update($validatedData);

        return redirect('/dashboard/locations')->with('success', 'Location has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        Location::destroy($location->id);
        return redirect('/dashboard/locations')->with('success', 'Location has been deleted!');
    }
}
