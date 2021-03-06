<?php

namespace App\Http\Controllers;

use App\Cyclothon;
use Illuminate\Http\Request;

class CyclothonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = $request->all();
        if (!$input) {
            return redirect('/cyclothon-21');
        }
        $input['status'] = 'created';
        $register = Cyclothon::create($input);
        return redirect('cyclothon/'. $register->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['status'] = 'created';
        $register = Cyclothon::create($input);
        return $register;
        return redirect('cyclothon/'. $register->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cyclothon  $cyclothon
     * @return \Illuminate\Http\Response
     */
    public function show(Cyclothon $cyclothon)
    {
        $success = true;
        $id = $cyclothon->id;
        $amount = $cyclothon->price;
        return view('welcome', compact(['success', 'id', 'amount']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cyclothon  $cyclothon
     * @return \Illuminate\Http\Response
     */
    public function edit(Cyclothon $cyclothon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cyclothon  $cyclothon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cyclothon $cyclothon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cyclothon  $cyclothon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cyclothon $cyclothon)
    {
        //
    }

    public function showForm()
    {
        $success = false;
        return view('welcome', compact('success'));
    }
}
