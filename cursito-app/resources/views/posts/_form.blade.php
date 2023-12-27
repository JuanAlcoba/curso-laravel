@csrf
<div  class="mb-4">
    <label class="uppercase text-white text-xs mb-2" for="titulo">Titulo</label>
    <input type="text" name="titulo" class="rounded bg-gray-700 border-gray-200 w-full mb-1" value="{{ old('titulo', $post->titulo) }}">
    <span class="text-xs text-red-600">@error('titulo') {{ $message }} @enderror</span>
</div>

<div  class="mb-4">
    <label class="uppercase text-white text-xs mb-2" for="titulo">Slug</label>
    <input type="text" name="slug" class="rounded bg-gray-700 border-gray-200 w-full mb-1" value="{{ old('slug', $post->slug) }}">
    <span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
</div>

<div class="mb-4">
    <label class="uppercase text-white text-xs mb-2" for="body">Contenido</label>
    <textarea name="body" rows="5" class="rounded bg-gray-700 border-gray-200 w-full mb-1">{{ old('body', $post->body) }}</textarea>
    <span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
</div>

<div class="flex justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="enviar" class="bg-sky-800 text-white rounded px-4 py-2 cursor-pointer">
</div>
