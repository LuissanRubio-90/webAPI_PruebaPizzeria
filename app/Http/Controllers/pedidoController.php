<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedido;

class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = pedido::All();
        return $pedido;
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
        $pedido = new pedido();
        $pedido->cod_pedido=$request->cod_pedido;
        $pedido->cliente_id=$request->cliente_id;
        $pedido->sucursal_id=$request->sucursal_id;
        
        $pedido->save();
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
        $pedido = pedido::findOrFail($request->id);
        $pedido->cod_pedido=$request->cod_pedido;
        $pedido->cliente_id=$request->cliente_id;
        $pedido->sucursal_id=$request->sucursal_id;

        $pedido->save();
        return $pedido;

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
        $pedido = pedido::destroy($request->id);
        return $pedido;
    }
}
