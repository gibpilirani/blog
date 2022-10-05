@props(['category'])
<div class="flex"><img src="{{ asset('storage/' . $category->thumbnail) }}" width="30" class="rounded mr-2"><a href="/?category={{ $category->slug }}"
   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
   style="font-size: 10px">{{ $category->name }}</a></div>

