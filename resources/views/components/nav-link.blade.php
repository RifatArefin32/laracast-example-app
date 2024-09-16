{{-- @props(['active' => false, 'tag' => 'a'])

<{{$tag}} {{ $attributes }} class="{{$active?'bg-gray-900 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
aria-current="{{$active?'page':'false'}} ">
    {{ $slot }}
</{{$tag}}> --}}

@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a {{$attributes}}
    class="{{$active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white'}}"
    aria-content="{{ $active ? 'page' : 'false' }} ">
    {{ $slot }}
    </a>
@else
    <buttton {{$attributes}}
    class="{{$active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white'}}"
    aria-content="{{ $active ? 'page' : 'false' }} ">
    {{ $slot }}
    </button>
@endif
