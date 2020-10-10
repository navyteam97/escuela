<?php

namespace App\Http\Controllers;

use App\Preceptor;
use Illuminate\Http\Request;

class PreceptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.app.preceptor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preceptor  $preceptor
     * @return \Illuminate\Http\Response
     */
    public function show(Preceptor $preceptor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preceptor  $preceptor
     * @return \Illuminate\Http\Response
     */
    public function edit(Preceptor $preceptor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preceptor  $preceptor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preceptor $preceptor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preceptor  $preceptor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preceptor $preceptor)
    {
        //
    }
}
