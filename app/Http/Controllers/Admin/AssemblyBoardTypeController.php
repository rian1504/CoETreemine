<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AssemblyBoardType;
use App\Http\Requests\StoreAssemblyBoardTypeRequest;
use App\Http\Requests\UpdateAssemblyBoardTypeRequest;

class AssemblyBoardTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('assembly.index')->with([
            'select' => 'Board'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assembly.board.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssemblyBoardTypeRequest $request)
    {
        //validate form
        $request->validate([
            'board_type_name' => 'required|min:5'
        ]);

        //create board
        AssemblyBoardType::create([
            'board_type_name' => $request->board_type_name
        ]);

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Board'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AssemblyBoardType $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssemblyBoardType $board)
    {
        //get board by ID
        $board = AssemblyBoardType::findOrFail($board->id_board);

        //render view with board
        return view('admin.assembly.board.edit', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssemblyBoardTypeRequest $request, AssemblyBoardType $board)
    {
        //validate form
        $request->validate([
            'board_type_name' => 'required|min:5'
        ]);

        //get board by ID
        $board = AssemblyBoardType::findOrFail($board->id_board);

        // update board
        $board->update([
            'board_type_name' => $request->board_type_name
        ]);

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Board'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssemblyBoardType $board)
    {
        //get board by ID
        $board = AssemblyBoardType::findOrFail($board->id_board);

        //delete board
        $board->delete();

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Board'
        ]);
    }
}