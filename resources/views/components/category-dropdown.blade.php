<x-dropdown>

    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 inline-flex">

            {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}

            <x-down-arrow class="absolute pointer-events-none" />
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request('category') ? '' : true">
        All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="request('category') === $category->slug">
            {{ $category->name }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
