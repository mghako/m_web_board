<?php

namespace App\Http\Controllers;

use App\Board;
use App\Http\Requests\SubmitBoardRequest;
use App\Mail\BoardSubmitted;
use App\SubmitBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubmitBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmitBoardRequest $request, Board $board)
    {
        $board->create($request->all());
        Mail::to(auth()->user())->send(new BoardSubmitted($board));
        return redirect()->route('submit-board.create')->withStatus(__('Board submitted ! We will review it and publish asap.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubmitBoard  $submitBoard
     * @return \Illuminate\Http\Response
     */
    public function show(SubmitBoard $submitBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubmitBoard  $submitBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(SubmitBoard $submitBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubmitBoard  $submitBoard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubmitBoard $submitBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubmitBoard  $submitBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubmitBoard $submitBoard)
    {
        //
    }
}
