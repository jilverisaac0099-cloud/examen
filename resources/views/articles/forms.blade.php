    <div class="mb-6">
    <label for="internal_code" class="block text-sm font-medium text-gray-700 mb-2">Nombre de la categoría</label>
    <input type="text" id="internal_code" name="internal_code" value="{{ old('internal_code', $articles->internal_code ?? '') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('internal_code')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
 <div class="mb-6">
    <label for="detailed_description" class="block text-sm font-medium text-gray-700 mb-2">Nombre de la categoría</label>
    <input type="text" id="detailed_description" name="detailed_description" value="{{ old('detailed_description', $articles->detailed_description ?? '') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('detailed_description')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
 <div class="mb-6">
    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Nombre de la categoría</label>
    <input type="number" id="price" name="price" value="{{ old('price', $article->price ?? '') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('price')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
 <div class="mb-6">
    <label for="cost" class="block text-sm font-medium text-gray-700 mb-2">Nombre de la categoría</label>
    <input type="number" id="cost" name="cost" value="{{ old('cost', $category->cost ?? '') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('cost')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="available_status" class="block text-sm font-medium text-gray-700 mb-2">Estado disponible</label>
    <input type="text" id="available_status" name="available_status" value="{{ old('available_status', $articles->available_status ?? '') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('available_status')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
<div class="mb-6">
    <label for="entry_date" class="block text-sm font-medium text-gray-700 mb-2">Fecha de entrada</label>
    <input type="text" id="entry_date" name="entry_date" value="{{ old('entry_date', $articles->entry_date ?? '') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web" required>
    @error('entry_date')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>


<div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
    <a href="{{ route('articles.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
        Cancelar
    </a>
    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
        {{ $btnText ?? 'Guardar' }}
    </button>
</div>
