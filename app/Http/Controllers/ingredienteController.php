<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ingrediente;

class ingredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ingrediente = ingrediente::All();
        return $ingrediente;
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
        $ingrediente = new ingrediente();
        $ingrediente->producto_id = $request->producto_id;
        $ingrediente->n_ingrediente = $request->n_ingrediente;
        $ingrediente->precio = $request->precio;

        $ingrediente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ingrediente = ingrediente::findOrFail($request->id);
        $ingrediente->producto_id = $request->producto_id;
        $ingrediente->n_ingrediente = $request->n_ingrediente;
        $ingrediente->precio = $request->precio;

        $ingrediente->save();
        return $ingrediente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $ingrediente = ingrediente::destroy($request->id);
        return $ingrediente;
    }
}
