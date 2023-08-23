<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menampilkan data tabel event ke views dashboard/events/index.blade.php
    public function index()
    {
        // $event = Event::orderBy('date')->get();
        // $events = Event::orderBy('date')->get();
        // $events = Event::table('events')
        //         ->orderBy('date', 'desc')
        //         ->get();
        
        return view('dashboard.events.index',  [
            // 'events' => $events,
            // 'events' => Event::all(),
            'events' => Event::orderBy('date','desc')->get(),
            "title" => "All Events",
            "events" => Event::latest()->filter(request(['search']))->get()
        ]);
    }

    public function approved($id)
    {
        Event::where('id',$id)->update([
            'status'=>2,
        ]);

        return redirect('/dashboard/events')->with('success', 'Event has been approved!');
    }

    public function declined($id)
    {
        Event::where('id',$id)->update([
            'status'=>3
        ]);

        return redirect('/dashboard/events')->with('success', 'Event has been declined!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menampilkan data tabel event ke views dashboard/events/create.blade.php
    public function create() 
    {
        return view('dashboard.events.create', [
            'location' => Location::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menyimpan data ke dalam tabel dari form dashboard/events/create.blade.php
    public function store(Request $request) 
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'required|max:255',
        //     'address' => 'required',
        //     'date' => 'required',
        //     'start_hour' => 'required',
        //     'end_hour' => 'required',
        //     'status' => 1,
        //     'total_user' => 'required',
        // ]);

        // Event::create($validatedData);

        // return redirect('/dashboard/events')->with('success', 'New event has been added!');

        $event = Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'location_id' => $request->input('location_id'),
            // 'address' => $request->input('address'),
            'date' => $request->input('date'),
            'start_hour' => $request->input('start_hour'),
            'end_hour' => $request->input('end_hour'),
            'status' => 1,
            // 'total_user' => $request->input('total_user'),
        ]);

        return redirect('/dashboard/events')->with('success', 'New event has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menampilkan data dari tabel event ke views dashboard/events/edit.blade.php
    public function edit(Event $event) 
    {
        return view('dashboard.events.edit', [
            'event' => $event,
            'location' => Location::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menyimpan data ke dalam tabel dari form dashboard/events/create.blade.php
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'location_id' => 'required',
            // 'address' => 'required',
            'date' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            // 'total_user' => 'required',
        ]);

        Event::where('id', $event->id)
             ->update($validatedData);

        return redirect('/dashboard/events')->with('success', 'Event has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

    //fungsi untuk menghapus data didalam tabel event
    public function destroy(Event $event)
    {
        Event::destroy($event->id);
        return redirect('/dashboard/events')->with('success', 'Event has been deleted!');
    }
}
