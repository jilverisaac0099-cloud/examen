<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight tracking-tight">
                {{ __('Editar pedido') }}
            </h2>
            <a href="{{ route('orders.index') }}" class="text-sm text-gray-500 hover:text-indigo-600 transition-colors font-medium">
                &larr; Volver a la lista
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">

                <form action="{{ route('orders.update', $order) }}" method="POST" onsubmit="confirmarActualizacion(event)" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="date_creation" class="block text-sm font-medium text-gray-700 mb-2">Fecha de Creación</label>
                        <input type="date" id="date_creation" name="date_creation" value="{{ old('date_creation', $order->date_creation) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('date_creation')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="subtotal" class="block text-sm font-medium text-gray-700 mb-2">Subtotal</label>
                        <input type="number" id="subtotal" name="subtotal" value="{{ old('subtotal', $order->subtotal) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('subtotal')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="iba" class="block text-sm font-medium text-gray-700 mb-2">IBA</label>
                        <input type="number" id="iba" name="iba" value="{{ old('iba', $order->iba) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('iba')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="grand_total" class="block text-sm font-medium text-gray-700 mb-2">Total</label>
                        <input type="number" id="grand_total" name="grand_total" value="{{ old('grand_total', $order->grand_total) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('grand_total')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="additional_note" class="block text-sm font-medium text-gray-700 mb-2">Nota Adicional</label>
                        <input type="text" id="additional_note" name="additional_note" value="{{ old('additional_note', $order->additional_note) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('additional_note')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="order_status" class="block text-sm font-medium text-gray-700 mb-2">Estado del Pedido</label>
                        <input type="text" id="order_status" name="order_status" value="{{ old('order_status', $order->order_status) }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                        @error('order_status')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="customer" class="block text-sm font-medium text-gray-700 mb-2">cliente</label>
                        <textarea id="customer" name="customer" rows="4" maxlength="100" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Nombre del cliente...">{{ old('customer', $order->customer) }}</textarea>
                        @error('customer')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="shipping_address" class="block text-sm font-medium text-gray-700 mb-2">Dirección de Envío</label>
                        <textarea id="shipping_address" name="shipping_address" rows="4" maxlength="100" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Dirección de envío...">{{ old('shipping_address', $order->shipping_address) }}</textarea>
                        @error('shipping_address')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('categories.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Actualizar Categoría
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
