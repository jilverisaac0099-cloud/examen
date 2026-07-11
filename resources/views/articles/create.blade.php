<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight tracking-tight">
                {{ __('crear Artículo') }}
            </h2>
<A href="{{ route('articles.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                volver a la lista de articulos
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 dark:border-gray-700 p-8">

                <formac action= "{{ route ('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                            <label for="internal_code" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Código Interno</label>
                            <input type="text" name="internal_code" id="internal_code" value="{{ old('internal_code') }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('internal_code')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                            <label for="detailed_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descripción Detallada</label>
                            <input type="text" name="detailed_description" id="detailed_description" value="{{ old('detailed_description') }}" maxlength="200" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('detailed_description')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Precio</label>
                            <input type="number" name="price" id="price" value="{{ old('price') }}" maxlength="10" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('price')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                         <label for="cost" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Costo</label>
                            <input type="number" name="cost" id="cost" value="{{ old('cost') }}" maxlength="10" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('cost')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                         <label for="available_status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Estado Disponible</label>
                            <input type="text" name="available_status" id="available_status" value="{{ old('available_status') }}" maxlength="10" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('available_status')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                            <label for="entry_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fecha de Entrada</label>
                            <input type="text" name="entry_date" id="entry_date" value="{{ old('entry_date') }}" maxlength="10" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('entry_date')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                     <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
                        <a href="{{ route('articles.index') }}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-xl font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Guardar Artículo
                        </button>
                    </div>
                </form>

            </div>

