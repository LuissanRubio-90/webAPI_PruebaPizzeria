<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_pedido;

class detalle_pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle_pedido = detalle_pedido::All();
        return $detalle_pedido;
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
        $detalle_pedido = new detalle_pedido();
        $detalle_pedido->pedido_id=$request->pedido_id;
        $detalle_pedido->pizza_id=$request->pizza_id;
        $detalle_pedido->cantidad=$request->cantidad;
        $detalle_pedido->precio=$request->precio;
        $detalle_pedido->total=$request->total;
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
        $detalle_pedido = detalle_pedido::findOrFail($request->id);
        $detalle_pedido->pedido_id=$request->pedido_id;
        $detalle_pedido->pizza_id=$request->pizza_id;
        $detalle_pedido->cantidad=$request->cantidad;
        $detalle_pedido->precio=$request->precio;
        $detalle_pedido->total=$request->total;

        $detalle_pedido->save();
        return $detalle_pedido;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $detalle_pedido = detalle_pedido::destroy($request->id);
        return $detalle_pedido;
    }
}
