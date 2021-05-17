<header class="text-gray-600 dark:text-gray-400 dark:bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    <span class="ml-3 text-xl">LaraWork</span>
                </a>

                <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                    @auth
                    <a class="mr-5 hover:text-gray-900 dark:text-white dark:hover:text-indigo-500" href="{{ route('home') }}">Dashboard</a>
                    <a class="mr-5 hover:text-gray-900 dark:text-white dark:hover:text-indigo-500" href="{{ route('conversations.index') }}">Messages</a>
                    <a class="mr-5 hover:text-gray-900 dark:text-white dark:hover:text-indigo-500" href="{{ route('jobs.index') }}">Works</a>
                    <livewire:search />
                </nav>
        <a
            class="inline-flex items-center dark:text-white bg-gray-100 dark:bg-gray-700 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 dark:hover:bg-gray-500 rounded text-base mt-4 md:mt-0 mr-2"
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >
            Quitter
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @else
    <a href="{{ route('register') }}"class="inline-flex items-center dark:text-white bg-gray-100 dark:bg-gray-700 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 dark:hover:bg-gray-500 rounded text-base mt-4 md:mt-0 mr-2" >Sign in
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
        </svg>
    </a>
    <a href="{{ route('login') }}" class="inline-flex items-center  dark:text-white bg-gray-100 dark:bg-gray-700 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 dark:hover:bg-gray-500 rounded text-base mt-4 md:mt-0">Log in
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path  d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
        </svg>
    </a>
    @endauth
</div>
</header>
