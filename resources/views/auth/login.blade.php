<x-layout>
    <x-form title="Login" description="Welcome back.">
        <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-4">

            @csrf

            <div class="space-y-2">

                <x-form.field label="Email:" name="email" type="email" />
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <x-form.field label="Password:" name="password" type="password" />
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn mt-2 h-10 w-full">Login</button>

            </div>
        </form>
    </x-form>
</x-layout>

