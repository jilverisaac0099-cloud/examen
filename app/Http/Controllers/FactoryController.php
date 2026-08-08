<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FactoryRequest;
use App\Models\Factory;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Corregido a mayúscula "Factory::"
        $factories = Factory::orderByDesc("id")->get();
        return view("factories.index", compact("factories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $factories = new Factory();
        return view("factories.create", compact("factories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FactoryRequest $request)
    {
        Factory::create($request->validated());
        return redirect()->route("factories.index")->with("success", "La fabrica se ha creado correctamente.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $factory = Factory::findOrFail($id);
        return view("factories.show", compact("factory"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $factory = Factory::findOrFail($id);
        return view("factories.edit", compact("factory"));
    }
    public function update(FactoryRequest $request, Factory $factory) 
    {
        $factory->update($request->validated());
        return redirect()->route("factories.index")->with("success", "La fabrica se ha actualizado correctamente.");
    }
    
    public function destroy(string $id)
    {
        $factory = Factory::findOrFail($id);
        $factory->delete();
        return redirect()->route("factories.index")->with("success", "La fabrica se ha eliminado correctamente.");
    }
}
