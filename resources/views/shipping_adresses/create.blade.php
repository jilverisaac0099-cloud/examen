<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight tracking-tight">
                {{ __('crear dirección') }}
            </h2>
            <a href="{{ route('shipping_adresses.index') }}" class="text-sm text-gray-500 hover:text-indigo-600 transition-colors font-medium">
                &larr; Volver a la lista
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">

                <formac action= "{{ route ('shipping_addresses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                            <label for="number" class="block text-sm font-medium text-gray-700">Número</label>
                            <input type="number" name="number" id="number" value="{{ old('number') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                            @error('number')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="mb-6">
                            <label for="street" class="block text-sm font-medium text-gray-700">Calle</label>
                            <input type="text" name="street" id="street" value="{{ old('street') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. 100">
                            @error('street')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                    </div>

                    </div class= "mb-6">
                            <label for="neighborhood" class="block text-sm font-medium text-gray-700">Colonia</label>
                            <input type="text" name="neighborhood" id="neighborhood" value="{{ old('neighborhood') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder ="Ej. 100">
                            @error('neighborhood')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="city" class="block text-sm font-medium text-gray-700">Ciudad</label>
                            <input type="text" name="city" id="city" value="{{ old('city') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. 100">
                            @error('city')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div class="mb-6">
                        <label for="reference_location" class="block text-sm font-medium text-gray-700">Punto de Referencia</label>
                            <input type="text" name="reference_location" id="reference_location" value="{{ old('reference_location') }}" maxlength="10" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. 100">
                            @error('reference_location')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div class="mb-6">
                            <label for="address_status" class="block text-sm font-medium text-gray-700">Estado de la Dirección</label>
                            <input type="text" name="address_status" id="address_status" value="{{ old('address_status') }}" maxlength="10" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. 100">
                            @error('address_status')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                        <label for="customer_id" class="block text-sm font-medium text-gray-700 mb-2">cliente</label>
                        <select id="customer_id" name="customer_id" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                            <option value="">-- Seleccione un cliente --</option>
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                    {{ $customer->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('customer_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('shipping_addresses.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Guardar Dirección
                        </button>
                    </div>
                </form>

            </div>

