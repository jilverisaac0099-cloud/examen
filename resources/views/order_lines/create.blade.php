<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight tracking-tight">
                {{ __('crear línea de pedido') }}
            </h2>
            <a href="{{ route('order_line.index') }}" class="text-sm text-gray-500 hover:text-indigo-600 transition-colors font-medium">
                &larr; Volver a la lista
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">

                <formac action= "{{ route ('order_lines.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                            <label for="request_quantity" class="block text-sm font-medium text-gray-700">Cantidad Solicitada</label>
                            <input type="number" name="request_quantity" id="request_quantity" value="{{ old('request_quantity') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                            @error('request_quantity')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="unite_price" class="block text-sm font-medium text-gray-700">precio unitario</label>
                            <input type="number" name="unite_price" id="unite_price" value="{{ old('unite_price') }}" maxlength="10" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('unite_price')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        < class="mb-6">
                            <label for="subtotal" class="block text-sm font-medium text-gray-700">subtotal</label>
                            <input type="number" name="subtotal" id="subtotal" value="{{ old('iba') }}" maxlength="10" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors"placeholder="Ej. Desarrollo web">
                            @error('iba')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    </div>

                <div class="mb-6">
                        <label for="order_id" class="block text-sm font-medium text-gray-700 mb-2">pedido</label>
                        <select id="order_id" name="order_id" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                            <option value="">-- Seleccione un artículo --</option>
                            @foreach($orders as $order)
                                <option value="{{ $order->id }}" {{ old('order_id') == $order->id ? 'selected' : '' }}>
                                    {{ $order->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('order_id')

                    <div class="mb-6">
                        <label for="article_id" class="block text-sm font-medium text-gray-700 mb-2">Artículo</label>
                        <select id="article_id" name="article_id" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors">
                            <option value="">-- Seleccione un artículo --</option>
                            @foreach($articles as $article)
                                <option value="{{ $article->id }}" {{ old('article_id') == $article->id ? 'selected' : '' }}>
                                    {{ $article->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('article_id')

                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('order_lines.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Guardar Línea de Pedido
                        </button>
                    </div>
                </form>

            </div>


