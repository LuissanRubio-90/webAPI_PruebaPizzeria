<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ingrediente_predeterminado;

class ingrediente_predeterminado_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ingrediente_p = ingrediente_predeterminado::All();
        return $ingrediente_p;
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
        $ingrediente_p = new ingrediente_predeterminado();
        $ingrediente_p->producto_id = $request->producto_id;
        $ingrediente_p->n_ingrediente_p = $request->n_ingrediente_p;
        $ingrediente_p->precio = $request->precio;

        $ingrediente_p->save();
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
        $ingrediente_p = ingrediente_predeterminado::findOrFail($request->id);
        $ingrediente_p->producto_id = $request->producto_id;
        $ingrediente_p->n_ingrediente_p = $request->n_ingrediente_p;
        $ingrediente_p->precio = $request->precio;

        $ingrediente_p->save();
        return $ingrediente_p;
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
        $ingrediente_p = ingrediente_predeterminado::destroy($request->id);
        return $ingrediente_p;
    }
}
