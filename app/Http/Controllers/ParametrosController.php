<?php

namespace App\Http\Controllers;

use App\Model\Parametros;
use Illuminate\Http\Request;

class ParametrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result['parametros'] = Parametros::orderBy('id', 'desc')->paginate(25);

        return view('site.sensado.listado')->with($result);
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
     * @param  \App\Model\Parametros  $parametros
     * @return \Illuminate\Http\Response
     */
    public function show(Parametros $parametros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Parametros  $parametros
     * @return \Illuminate\Http\Response
     */
    public function edit(Parametros $parametros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Parametros  $parametros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parametros $parametros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Parametros  $parametros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parametros $parametros)
    {
        //
    }
}
