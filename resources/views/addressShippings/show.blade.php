<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <a href="{{ route('address_shippings.index') }}" class="p-2 bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </a>
                <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight tracking-tight">
                    {{ __('Detalle de Dirección de Envío') }}
                </h2>
            </div>
            <div class="flex items-center space-x-3">
                <a href="{{ route('address_shippings.edit', $address_shipping) }}" class="inline-flex items-center px-4 py-2 bg-amber-500 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-600 focus:outline-none transition ease-in-out duration-150 shadow-lg shadow-amber-500/20">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    Editar
                </a>
                <form action="{{ route('address_shippings.destroy', $address_shipping) }}" method="POST" id="form-delete-{{ $address_shipping->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmarEliminacion({{ $address_shipping->id }})" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none transition ease-in-out duration-150 shadow-lg shadow-red-600/20">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 dark:border-gray-700 p-6 md:p-8">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-gray-100 dark:border-gray-700 pb-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">ID #{{ $address_shipping->id }}</span>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-1">
                            {{ $address_shipping->street ?? 'Sin Calle' }} #{{ $address_shipping->number ?? 'S/N' }}
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            {{ $address_shipping->neighborhood ?? 'Sin barrio' }}, {{ $address_shipping->city ?? 'Sin ciudad' }}
                        </p>
                    </div>
                    <div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ ($address_shipping->state_address ?? '') === 'activo' ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400' : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300' }}">
                            {{ ucfirst($address_shipping->state_address ?? 'Inactivo') }}
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                    <div class="bg-gray-50/50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700">
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider">Cliente Asignado</span>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-2">
                            {{ $address_shipping->customer->name ?? 'Sin cliente' }}
                        </p>
                    </div>

                    <div class="bg-gray-50/50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700">
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider">Número de Vivienda</span>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-2">
                            {{ $address_shipping->number ?? 'Sin número' }}
                        </p>
                    </div>

                    <div class="bg-gray-50/50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700">
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider">Calle / Avenida</span>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-2">
                            {{ $address_shipping->street ?? 'Sin datos' }}
                        </p>
                    </div>

                    <div class="bg-gray-50/50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700">
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider">Barrio / Colonia</span>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-2">
                            {{ $address_shipping->neighborhood ?? 'Sin datos' }}
                        </p>
                    </div>

                    <div class="bg-gray-50/50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700">
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider">Ciudad</span>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-2">
                            {{ $address_shipping->city ?? 'Sin datos' }}
                        </p>
                    </div>

                    <div class="bg-gray-50/50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700">
                        <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider">Estado de Dirección</span>
                        <p class="text-base font-semibold text-gray-900 dark:text-white mt-2">
                            {{ $address_shipping->state_address ?? 'No definido' }}
                        </p>
                    </div>
                </div>

                <div class="mt-6 bg-gray-50/50 dark:bg-gray-900/50 p-5 rounded-xl border border-gray-100 dark:border-gray-700">
                    <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Referencia de Ubicación</span>
                    <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                        {{ $address_shipping->reference_location ?? 'Sin referencia adicional registrada.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmarEliminacion(id) {
            Swal.fire({
                title: '¿Eliminar dirección?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                background: '#1e293b',
                color: '#ffffff',
                customClass: { popup: 'rounded-2xl border border-gray-700' }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-delete-' + id).submit();
                }
            })
        }
    </script>
</x-app-layout>


