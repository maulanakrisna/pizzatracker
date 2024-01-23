<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePizzaRequest;
use App\Http\Requests\UpdatePizzaRequest;
use App\Models\Pizza;
use Inertia\Inertia;

use function Termwind\render;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = Pizza::all();

        return Inertia::render('Pizzas/All', [
            'pizzas' => $pizzas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePizzaRequest $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizza $pizza)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePizzaRequest $request, Pizza $pizza)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizza $pizza)
    {
    }
}
