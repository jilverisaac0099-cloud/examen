    <div class="mb-6">
    <label for="number" class="block text-sm font-medium text-gray-700 mb-2">Fecha de Creación</label>
    <input type="number" id="number" name="number" value="{{ old('number', $shippingAddress->date_creation ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('date_creation')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="street" class="block text-sm font-medium text-gray-700 mb-2">Subtotal</label>
    <input type="text" id="street" name="street" value="{{ old('street', $shippingAddress->street ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('street')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="neighborhood" class="block text-sm font-medium text-gray-700 mb-2">iba</label>
    <input type="text" id="neighborhood" name="neighborhood" value="{{ old('iba', $shippingAddress->neighborhood ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('neighborhood')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="city" class="block text-sm font-medium text-gray-700 mb-2">Total</label>
    <input type="number" id="city" name="city" value="{{ old('city', $shippingAddress->city ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('city')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="reference_location" class="block text-sm font-medium text-gray-700 mb-2">Nota Adicional</label>
    <input type="text" id="reference_location" name="reference_location" value="{{ old('reference_location', $shippingAddress->reference_location ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('reference_location')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="address_status" class="block text-sm font-medium text-gray-700 mb-2">Estado del pedido</label>
    <input type="date" id="address_status" name="address_status" value="{{ old('address_status', $shippingAddress->address_status ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('address_status')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="customer" class="block text-sm font-medium text-gray-700 mb-2">Cliente</label>
    <input type="text" id="customer" name="customer" value="{{ old('customer', $shippingAddress->customer ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('customer')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
    <a href="{{ route('categories.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
        Cancelar
    </a>
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
        {{ $btnText ?? 'Guardar' }}
    </button>
</div>

