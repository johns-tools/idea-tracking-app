<x-layout>
    <x-form title="Create an Account" description="Start tracking your ideas today.">
        <form method="POST" action="{{ route('register') }}" class="mt-6 space-y-4">

            @csrf

            <div class="space-y-2">

                <x-form.field label="Name:" name="name" />
                <x-form.field label="Email:" name="email" type="email" />
                <x-form.field label="Password:" name="password" type="password" />
                <x-form.field label="Confirm Password:" name="password_confirmation" type="password" />

                <button type="submit" class="btn mt-2 h-10 w-full">Create Account</button>

            </div>

        </form>
    </x-form>
</x-layout>
