<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::get();
        return response()->json(
           ['data'=> $vehicules,
           'msg'=>['sumary'=> 'consulta correcta',
           'detail'=>'la consulta esta correcta', 
           'code'=>'201']], 201);

        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicules = new Vehicule();
        $vehicules->color= $request->input('color');
        $vehicules->model = $request->input('model');
        $vehicules->plate_car = $request->input('plate_car');
        $vehicules->type = $request->input('type');
        $vehicules->save();

        return response()->json(
            [
                'data' => $vehicules,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'El conductor se creo correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vehicules)
    {
        $vehicules = Vehicule::find($vehicules);
        return response()->json(
            [
                'data' => $vehicules,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del consuctor se ejecutó correctamente',
                    'code' => '200'
                ]
            ], 200
        );;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehicules)
    {
        $vehicules = Vehicule::find($vehicules);
        $vehicules->color= $request->input('color');
        $vehicules->model = $request->input('model');
        $vehicules->plate_car = $request->input('plate_car');
        $vehicules->type = $request->input('type');
        $vehicules->save();
        return response()->json(
            [
                'data' => $vehicules,
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => 'EL conductor se actualizó correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehicules)
    {
        $vehicules = Vehicule::find($vehicules);
        $vehicules->delete();
        return response()->json(
            [
                'data' => $vehicules,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL vehiculo se eliminó correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
