<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight tracking-tight">
                {{ __('Editar Artículo') }}
            </h2>
            <a href="{{ route('articles.index') }}" class="text-sm text-gray-500 hover:text-indigo-400 transition-colors font-medium">
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
                        <label for="code_internal" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Código Interno</label>
                        <input type="text" id="code_internal" name="code_internal" value="{{ old('code_internal', $article->code_internal) }}" maxlength="50" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. 397294">
                        @error('code_internal')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Descripción</label>
                        <textarea id="description" name="description" rows="4" maxlength="255" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Descripción del artículo...">{{ old('description', $article->description) }}</textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Precio</label>
                        <input type="number" step="0.01" id="price" name="price" value="{{ old('price', $article->price) }}" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="0.00">
                        @error('price')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="cost" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Costo</label>
                        <input type="number" step="0.01" id="cost" name="cost" value="{{ old('cost', $article->cost) }}" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="0.00">
                        @error('cost')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Fecha de Registro ahora va antes -->
                    <div class="mb-6">
                        <label for="date_record" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Fecha de Registro</label>
                        <input type="date" id="date_record" name="date_record" value="{{ old('date_record', $article->date_record ? \Carbon\Carbon::parse($article->date_record)->format('Y-m-d') : '') }}" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('date_record')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Estado ahora va después de la fecha -->
                    <div class="mb-6">
                        <label for="state" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Estado</label>
                        <select id="state" name="state" class="w-full rounded-xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                            <option value="activo" {{ old('state', strtolower($article->state)) === 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ old('state', strtolower($article->state)) === 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                        @error('state')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
                        <a href="{{ route('articles.index') }}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-xl font-semibold text-xs text-gray-700 dark:text-gray-200 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Actualizar Artículo
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
