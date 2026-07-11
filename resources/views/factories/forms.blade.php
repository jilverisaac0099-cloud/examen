<div class="mb-6">
    <label for="company_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nombre de la fábrica</label>
    <input type="text" id="company_name" name="company_name" value="{{ old('company_name', $factory->company_name ?? '') }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('company_name')
        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>
 <div class="mb-6">
    <label for="identification_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Número de Identificación</label>
    <input type="text" id="identification_number" name="identification_number" value="{{ old('identification_number', $factory->identification_number ?? '') }}" maxlength="20" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('identification_number')
        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>
 <div class="mb-6">
    <label for="telephone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Teléfono</label>
    <input type="tel" id="telephone" name="telephone" value="{{ old('telephone', $factory->telephone ?? '') }}" maxlength="20" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('telephone')
        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>
 <div class="mb-6">
    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Correo Electrónico</label>
    <input type="email" id="email" name="email" value="{{ old('email', $factory->email ?? '') }}" maxlength="100" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('email')
        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Dirección</label>
    <input type="text" id="address" name="address" value="{{ old('address', $factory->address ?? '') }}" maxlength="200" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('address')
        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="supplier_status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Estado del Proveedor</label>
    <input type="text" id="supplier_status" name="supplier_status" value="{{ old('supplier_status', $factory->supplier_status ?? '') }}" maxlength="20" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('supplier_status')
        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>


<div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
    <a href="{{ route('factories.index') }}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-xl font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
        Cancelar
    </a>
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
        {{ $btnText ?? 'Guardar' }}
    </button>
</div>
