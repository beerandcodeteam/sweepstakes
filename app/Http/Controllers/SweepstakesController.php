<?php

namespace App\Http\Controllers;

use App\Http\Requests\SweepstakesStoreRequest;
use App\Http\Requests\SweepstakesUpdateRequest;
use App\Models\Sweepstake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SweepstakesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sweepstakes = Sweepstake::with('participants')
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at')
            ->get();

        $near_sweepstakes = Sweepstake::with('participants')
            ->where('user_id', Auth::user()->id)
            ->whereDate('end_date', '>', now())
            ->limit(4)
            ->orderBy('end_date', 'asc')
            ->get();

        return response()->view('sweepstakes.index',[
            'sweepstakes' => $sweepstakes,
            'near_sweepstakes' => $near_sweepstakes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('sweepstakes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SweepstakesStoreRequest $request)
    {
        Sweepstake::create($request->all());

        return redirect()->route('sweepstakes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sweepstake = Sweepstake::with('participants')
            ->where("id", $id)
            ->where('user_id', Auth::user()->id)
            ->first();

        return response()->view('sweepstakes.show', [
            'sweepstake' => $sweepstake
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sweepstake = Sweepstake::where("id", $id)
            ->where('user_id', Auth::user()->id)
            ->first();

        return response()->view('sweepstakes.edit', [
            'sweepstake' => $sweepstake
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SweepstakesUpdateRequest $request, $id)
    {
        $sweepstake = Sweepstake::where("id", $id)
            ->where('user_id', Auth::user()->id)
            ->first();

        $sweepstake->update($request->all());

        return redirect()->route('sweepstakes.show', $sweepstake->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $sweepstake = Sweepstake::where("id", $id)
            ->where('user_id', Auth::user()->id)
            ->first();

        if ($sweepstake) {
            $sweepstake->delete();
        }

        return redirect()->route('sweepstakes.index');
    }

}
