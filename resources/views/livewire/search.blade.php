<div
    class="flex flex-col relative"
    x-data="{ open: true }"
    x-on:click.away="open = false; @this.resetIndex();"
    x-on:keydown.escape="open = false; @this.resetIndex();">
    <input type="text"
    class="w-full bg-white rounded-full border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-500 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" @click.prevent="open = true" wire:model="query"
    wire:keydown.prevent.arrow-down="incrementIndex()"
    wire:keydown.prevent.arrow-up="decrementIndex()"
    wire:keydown.prevent.enter="selectIndex()"
    wire:keydown.backspace="resetIndex()"
    >
    <svg class="h-5 w-5 text-green-500 absolute top-0 right-0 mt-3 mr-3 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
    </svg>
    @if (strlen($query) >= 2)
        <div class="z-10 bg-gray-100 dark:bg-gray-800 border border-gray-400 rounded w-56 px-2 py-1 mt-10 flex flex-col absolute" x-show="open">
        @if (count($jobs) > 0)
            @foreach ($jobs as $index => $job)
                <a href="{{ route('jobs.show', $job['id']) }}"  class=" hover:text-green-500 {{ ($index === $selectedIndex) ? 'text-green-400 rounded bg-gray-600' : '' }} my-2">{{ $job['title'] }}</a>
            @endforeach
        @else
        <span>il n'y a pas de"{{ $query }}"</span>
        @endif
        </div>
    @endif
</div>
