<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeTrack;
use App\Http\Requests\StorePrototypeTrackRequest;
use App\Http\Requests\UpdatePrototypeTrackRequest;

class PrototypeTrackController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.track.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeTrackRequest $request)
    {
        //validate form
        $request->validate([
            'track_name' => 'required|min:5',
            'track_price' => 'required|numeric'
        ]);

        //create track
        PrototypeTrack::create([
            'track_name' => $request->track_name,
            'track_price' => $request->track_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Track'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeTrack $track)
    {
        //get track by ID
        $track = PrototypeTrack::findOrFail($track->id_track);

        //render view with track
        return view('admin.prototype.track.edit', compact('track'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeTrackRequest $request, PrototypeTrack $track)
    {
        //validate form
        $request->validate([
            'track_name' => 'required|min:5',
            'track_price' => 'required|numeric'
        ]);

        //get track by ID
        $track = PrototypeTrack::findOrFail($track->id_track);

        // update track
        $track->update([
            'track_name' => $request->track_name,
            'track_price' => $request->track_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Track'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeTrack $track)
    {
        //get track by ID
        $track = PrototypeTrack::findOrFail($track->id_track);

        //delete track
        $track->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Track'
        ]);
    }
}
