@props(['title', 'description'])

<div class="flex min-h-[calc(100vh-4rem)] items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight">{{ $title }}</h1>
            <p class="mt-2 text-sm text-gray-600">{{ $description }}</p>

            {{ $slot }}
        </div>
    </div>
</div>
