<head>@include('partials.head')</head>
<x-layouts::app.localhome :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts::app.localhome>
