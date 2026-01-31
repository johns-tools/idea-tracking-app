<x-layout>
    <div class="flex min-h-[calc(100vh-4rem)] items-center justify-center px-4">
        <div class="w-full max-w-md">
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight">Register an account</h1>
                <p class="mt-2 text-sm text-gray-600">Start tracking your ideas today.</p>

                <form method="POST" action="{{ route('register') }}" class="mt-6 space-y-4">

                    @csrf

                    <div class="space-y-2">

                        <!-- Name -->
                        <label for="name" class="label text-left">Name:</label>
                        <input id="name" type="text" class="input" name="name">

                        <!-- email -->
                        <label for="email" class="label text-left mt-2">Email:</label>
                        <input id="email" type="email" class="input" name="email">

                        <!-- Password -->
                        <label for="password" class="label text-left mt-2">Password:</label>
                        <input id="password" type="password" class="input" name="password">

                        <!-- Confirm Password -->
                        <label for="password_confirmation" class="label text-left mt-2">Confirm Password:</label>
                        <input id="password_confirmation" type="password" class="input" name="password_confirmation">

                        <button type="submit" class="btn mt-2 h-10 w-full">Create Account</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>
