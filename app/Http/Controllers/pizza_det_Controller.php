<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza_det;

class pizza_det_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pizza_det = pizza_det::All();
        return $pizza_det;
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
        $pizza_det = new pizza_det();
        $pizza_det->cod_pizza = $request->cod_pizza;
        $pizza_det->n_pizza = $request->n_pizza;
        $pizza_det->precio_s = $request->precio_s;
        $pizza_det->predeterminado = $request->predeterminado;

        $pizza_det->save();
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
        $pizza_det = pizza_det::findOrFail($request->id);
        $pizza_det->cod_pizza = $request->cod_pizza;
        $pizza_det->n_pizza = $request->n_pizza;
        $pizza_det->precio_s = $request->precio_s;
        $pizza_det->predeterminado = $request->predeterminado;

        $pizza_det->save();
        return $pizza_det;
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
        $pizza_det = pizza_request::destroy($request->id);
        return $pizza_det;
    }
}
