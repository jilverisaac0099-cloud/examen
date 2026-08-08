<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressShipping;
use App\Http\Requests\AddressShippingRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AddressShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    
    $addressshippings = AddressShipping::with('customer')->paginate(10);

    return view('addressshippings.index', compact('addressshippings'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $addressshipping = new AddressShipping();
        $customers = Customer::all();
        return view('addressshippings.create', compact('addressshipping', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressShippingRequest $request): RedirectResponse
    {
        AddressShipping::create($request->validated());
        return redirect()->route('address_shippings.index')->with('success', 'Dirección de envío creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AddressShipping $address_shipping): View
    {
        $address_shipping->load('customer');
        return view('address_shippings.show', compact('address_shipping'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $addressshipping = AddressShipping::findOrFail($id);
        $customers = Customer::all();
        return view('addressshippings.edit', compact('addressshipping', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressShippingRequest $request, string $id): RedirectResponse
    {
        $address_shipping = AddressShipping::findOrFail($id);
        $address_shipping->update($request->validated());
        return redirect()->route('address_shippings.index')->with('success', 'Dirección de envío actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $address_shipping = AddressShipping::findOrFail($id);
        $address_shipping->delete();
        return redirect()->route('address_shippings.index')->with('success', 'Dirección de envío eliminada correctamente.');
    }
}
