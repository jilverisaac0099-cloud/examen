<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight tracking-tight">
                {{ __('Editar artículo') }}
            </h2>
            <a href="{{ route('articles.index') }}" class="text-sm text-gray-500 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-indigo-400 transition-colors font-medium">
                &larr; Volver a la lista
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 dark:border-gray-700 p-8">

                <form action="{{ route('articles.update', $article) }}" method="POST" onsubmit="confirmarActualizacion(event)" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="internal_code" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nombre del articulo</label>
                        <input type="text" id="internal_code" name="internal_code" value="{{ old('internal_code', $article->internal_code) }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                        @error('internal_code')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="detailed_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Descripcion detallada</label>
                        <input type="text" id="detailed_description" name="detailed_description" value="{{ old('detailed_description', $article->detailed_description) }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                        @error('detailed_description')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">precio</label>
                        <input type="number" id="price" name="price" value="{{ old('price', $article->price) }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                        @error('price')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="cost" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">costo</label>
                        <input type="number" id="cost" name="cost" value="{{ old('cost', $article->cost) }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                        @error('cost')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="available_status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Estado disponible</label>
                        <input type="text" id="available_status" name="available_status" value="{{ old('available_status', $article->available_status) }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                        @error('available_status')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="entry_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">fecha de entrada</label>
                        <input type="date" id="entry_date" name="entry_date" value="{{ old('entry_date', $article->entry_date) }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                        @error('entry_date')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
                        <a href="{{ route('articles.index') }}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-xl font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Actualizar Artículo
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        function confirmarActualizacion(event) {
            event.preventDefault();

            Swal.fire({
                title: '¿Guardar los cambios?',
                text: "Se actualizará la información de este artículo.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#4f46e5',
                cancelButtonColor: '#64748b',
                confirmButtonText: 'Sí, actualizar',
                cancelButtonText: 'Cancelar',
                background: '#1e293b',
                color: '#ffffff',
                customClass: {
                    popup: 'rounded-2xl border border-gray-700'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();
                }
            })
        }
    </script>
</x-app-layout>
