<x-layouts.app
    :title="$store->seoTitle ?? $store->name"
    :description="$store->seoDescription ?? 'Launderette in ' . $store->city"
    :keywords="$store->seoKeyword ?? 'laundry, launderette, ' . strtolower($store->city)"
    :canonical="url()->current()"
    :robots="'index, follow'"
>
    @livewire('welcome', ['name' => $store->name])
</x-layouts.app>
