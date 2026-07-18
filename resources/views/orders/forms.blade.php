    <div class="mb-6">
    <label for="date_creation" class="block text-sm font-medium text-gray-700 mb-2">Fecha de Creación</label>
    <input type="date" id="date_creation" name="date_creation" value="{{ old('date_creation', $order->date_creation ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('date_creation')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="subtotal" class="block text-sm font-medium text-gray-700 mb-2">Subtotal</label>
    <input type="number" id="subtotal" name="subtotal" value="{{ old('subtotal', $order->subtotal ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('subtotal')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="iba" class="block text-sm font-medium text-gray-700 mb-2">iba</label>
    <input type="date" id="iba" name="iba" value="{{ old('iba', $order->iba ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('iba')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="grand_total" class="block text-sm font-medium text-gray-700 mb-2">Total</label>
    <input type="number" id="grand_total" name="grand_total" value="{{ old('grand_total', $order->grand_total ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('grand_total')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="additional_note" class="block text-sm font-medium text-gray-700 mb-2">Nota Adicional</label>
    <input type="text" id="additional_note" name="additional_note" value="{{ old('additional_note', $order->additional_note ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('additional_note')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="order_status" class="block text-sm font-medium text-gray-700 mb-2">Estado del pedido</label>
    <input type="date" id="order_status" name="order_status" value="{{ old('order_status', $order->order_status ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('order_status')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="customer" class="block text-sm font-medium text-gray-700 mb-2">Cliente</label>
    <input type="text" id="customer" name="customer" value="{{ old('customer', $order->customer ?? '') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" required>
    @error('customer')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="shipping_address" class="block text-sm font-medium text-gray-700 mb-2">Dirección de envío</label>
    <textarea id="shipping_address" name="shipping_address" rows="4" maxlength="200" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Dirección completa para el envío...">{{ old('shipping_address', $order->shipping_address ?? '') }}</textarea>
    @error('shipping_address')
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
