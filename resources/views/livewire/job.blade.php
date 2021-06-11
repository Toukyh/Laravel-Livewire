<div class="p-4 lg:w-1/3">
    <div class="h-full bg-gray-100 dark:bg-gray-800 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Poster par {{$job->user->name}}</h2>
        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 dark:text-gray-100 mb-3">{{ $job->title }}</h1>
        <p class="leading-relaxed mb-3">{{ Illuminate\Support\Str::limit($job->description, 120, '...')}}</p>
        <div class="flex items-center text-sm text-gray-600 font-semibold mb-2">
            {{ number_format($job->price / 100, 2, ',', ' ') }} €
    </div>
    @if ($job->user->id == auth()->user()->id)
    <a href="#" class="text-green-500 inline-flex items-center">Modifier
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
    </a>
    @endif
    <a href="{{ route('jobs.show', $job->id) }}" class="text-green-500 inline-flex items-center">Lire plus
        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 12h14"></path>
        <path d="M12 5l7 7-7 7"></path>
        </svg>
    </a>

        <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <button wire:click.prevent="like()" class="text-gray-500 hover:text-green-500 focus:outline-none">
                <span>
                    @if ($job->isLiked())
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="rgb(50, 168, 129)" viewBox="0 0 24 24" stroke="rgb(50, 168, 129)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    @else
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    @endif
                </span>
            </button>
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">

            </span>
            <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <span>{{ $job->proposals->count() }} </span>
                <span class="ml-1"> @choice('proposition | propositions', $job->proposals)</span>
            </span>

        </div>
    </div>
</div>
