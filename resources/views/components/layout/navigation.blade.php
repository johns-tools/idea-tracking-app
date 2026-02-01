<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        <div>
            <a href="/">
                <img src="/images/logo.png" width="50" alt="Idea Logo"/>
            </a>
        </div>

        <div class="flex gap-4 items-center">

            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth

            @guest
                <a href="/register">Register</a>
                <a href="/login" class="btn">Login</a>
            @endguest

        </div>

    </div>
</nav>
