<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeRouteProcess;
use App\Http\Requests\StorePrototypeRouteProcessRequest;
use App\Http\Requests\UpdatePrototypeRouteProcessRequest;

class PrototypeRouteProcessController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.route_process.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeRouteProcessRequest $request)
    {
        //validate form
        $request->validate([
            'route_process_name' => 'required|min:5'
        ]);

        //create route process
        PrototypeRouteProcess::create([
            'route_process_name' => $request->route_process_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Route Process'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeRouteProcess $route_process)
    {
        //get route process by ID
        $route_process = PrototypeRouteProcess::findOrFail($route_process->id_route);

        //render view with route_process
        return view('admin.prototype.route_process.edit', compact('route_process'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeRouteProcessRequest $request, PrototypeRouteProcess $route_process)
    {
        //validate form
        $request->validate([
            'route_process_name' => 'required|min:5'
        ]);

        //get route process by ID
        $route_process = PrototypeRouteProcess::findOrFail($route_process->id_route);

        // update route process
        $route_process->update([
            'route_process_name' => $request->route_process_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Route Process'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeRouteProcess $route_process)
    {
        //get route process by ID
        $route_process = PrototypeRouteProcess::findOrFail($route_process->id_route);

        //delete route process
        $route_process->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Route Process'
        ]);
    }
}
