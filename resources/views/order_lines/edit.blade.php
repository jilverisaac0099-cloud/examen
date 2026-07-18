<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight tracking-tight">
                {{ __('Editar linea de pedido') }}
            </h2>
            <a href="{{ route('orders.index') }}" class="text-sm text-gray-500 hover:text-indigo-600 transition-colors font-medium">
                &larr; Volver a la linea de pedido
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">

                <form action="{{ route('orders.update', $order_line) }}" method="POST" onsubmit="confirmarActualizacion(event)" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="request_quantity" class="block text-sm font-medium text-gray-700 mb-2">cantidad solicitada</label>
                        <input type="number" id="request_quantity" name="request_quantity" value="{{ old('date_creation', $order_line->request_quantity) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('request_quantity')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="unite_price" class="block text-sm font-medium text-gray-700 mb-2">Subtotal</label>
                        <input type="number" id="unite_price" name="unite_price" value="{{ old('subtotal', $order_line->unite_price) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('unite_price')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                  
                    <div class="mb-6">
                        <label for="order" class="block text-sm font-medium text-gray-700 mb-2">pedido</label>
                        <textarea id="order" name="order" rows="4" maxlength="100" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Nombre del cliente...">{{ old('customer', $order_line->order) }}</textarea>
                        @error('customer')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>

                    <div class="mb-6">
                        <label for="article_id" class="block text-sm font-medium text-gray-700 mb-2">Artículo</label>
                        <select id="article_id" name="article_id" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                            <option value="">-- Seleccione un artículo --</option>
                            @foreach($articles as $article)
                                <option value="{{ $article->id }}" {{ old('article_id', $order_lines->article_id) == $article->id ? 'selected' : '' }}>
                                    {{ $article->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('article_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('order_line.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Actualizar linea de pedido
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
                text: "Se actualizará la información de esta categoría.",
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
