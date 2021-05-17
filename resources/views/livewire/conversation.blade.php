<div class="bg-gray-900">
    <div class="max-w-1/2 w-1/2 mx-auto" >
        <h1 class="text-3xl text-indigo-500 mb-5">Mission : {{ $conversation->job->title }}</h1>
        @foreach($conversation->messages as $message)
        <div class="rounded-2xl px-3 py-3 mb-2 font-medium
        {{ $message->user->id === auth()->user()->id  ? 'bg-indigo-500 text-white mr-auto max-w-1/2 w-1/2' : 'ml-auto bg-gray-300 dark:bg-gray-700  text-gray-700 dark:text-gray-100 max-w-1/2 w-1/2'}}">
        <p class="font-normal">{{ $message->user->id === auth()->user()->id  ? 'Vous avez dit : ' : $message->user->name . ' a dit :'}}</p>
        <p>{{ $message->content }}</p>
    </div>
    @endforeach
    <div class="relative">
        <input
            wire:keydown.enter.prevent="sendMessage"
            wire:model="message"
            class="w-full bg-white rounded-xl border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-indigo-500 focus:ring-2 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 &loer^ltpeleleading-8 transition-colors duration-200 ease-in-out mt-5"
        >
        <svg class="text-indigo-500 absolute top-0 right-0 transform rotate-90 mr-2 mt-8 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
        </svg>
    </div>
</div>
