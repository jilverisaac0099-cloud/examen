
<div class="mb-6">
    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Estado del cliente</label>
    <input type="text" id="name" name="name" value="{{ old('name', $customer->name?? '') }} " maxlenght= "50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('name')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">correo electrónico</label>
    <input type="email" id="email" name="email" value="{{ old('email', $customer->email?? '') }}" maxlenghts= "50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('email')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">Número de teléfono</label>
    <input type="tel" id="telephone" name="telephone" value="{{ old('telephone', $customer->telephone?? '') }}" maxlenghts= "20" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('telephone')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="balance" class="block text-sm font-medium text-gray-700 mb-2">Saldo</label>
    <input type="number" id="balance" name="balance" value="{{ old('balance', $customer->balance?? '') }}" maxlenghts= "20" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('balance')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="credit_limit" class="block text-sm font-medium text-gray-700 mb-2">Límite de crédito</label>
    <input type="number" id="credit_limit" name="credit_limit" value="{{ old('credit_limit', $customer->credit_limit?? '') }}" maxlenghts= "20" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('credit_limit')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="discount" class="block text-sm font-medium text-gray-700 mb-2">Descuento</label>
    <input type="number" id="discount" name="discount" value="{{ old('discount', $customer->discount?? '') }}" maxlenghts= "20" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('discount')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="registration_date" class="block text-sm font-medium text-gray-700 mb-2">Fecha de registro</label>
    <input type="date" id="registration_date" name="registration_date" value="{{ old('registration_date', $customer->registration_date?? '') }}" maxlenghts= "20" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('registration_date')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="customer_status" class="block text-sm font-medium text-gray-700 mb-2">Estado del cliente</label>
    <input type="text" id="customer_status" name="customer_status" value="{{ old('customer_status', $customer->customer_status?? '') }}" maxlenghts= "20" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. desarrollo web" required>
    @error('customer_status')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class= "flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
 <a href="{{  route('customers.index') }}" class= "inline-flex items-center px-4 py-2 bg-white border border-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
    Cancelar
</a>
 <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
        {{ $btnText ?? 'Guardar' }}
    </button>
</div>

