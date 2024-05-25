<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeBoardType;
use App\Http\Requests\StorePrototypeBoardTypeRequest;
use App\Http\Requests\UpdatePrototypeBoardTypeRequest;

class PrototypeBoardTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Board'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.board.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeBoardTypeRequest $request)
    {
        //validate form
        $request->validate([
            'board_type_name' => 'required|min:5',
            'board_type_price' => 'required|numeric'
        ]);

        //create board
        PrototypeBoardType::create([
            'board_type_name' => $request->board_type_name,
            'board_type_price' => $request->board_type_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Board'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrototypeBoardType $board_type)
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Board'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeBoardType $board_type)
    {
        //get board by ID
        $board_type = PrototypeBoardType::findOrFail($board_type->id_board);

        //render view with board
        return view('admin.prototype.board.edit', compact('board_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeBoardTypeRequest $request, PrototypeBoardType $board_type)
    {
        //validate form
        $request->validate([
            'board_type_name' => 'required|min:5',
            'board_type_price' => 'required|numeric'
        ]);

        //get board by ID
        $board_type = PrototypeBoardType::findOrFail($board_type->id_board);

        // update board
        $board_type->update([
            'board_type_name' => $request->board_type_name,
            'board_type_price' => $request->board_type_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Board'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeBoardType $board_type)
    {
        //get board by ID
        $board_type = PrototypeBoardType::findOrFail($board_type->id_board);

        //delete board
        $board_type->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Board'
        ]);
    }
}