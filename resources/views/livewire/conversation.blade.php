
    <section class="text-gray-400 px-24 bg-gray-900 body-font">
        <div class="container content-center px-5 py-24 mx-auto">
            <div class="flex flex-col w-full h-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Mission : {{ $conversation->job->title }}</h1>
                @foreach($conversation->messages as $message)
                    <div>
                    <p class=" mx-auto leading-relaxed font-normal
                    {{ $message->user->id === auth()->user()->id  ? 'text-left ' : 'text-right'}}">
                        {{ $message->user->id === auth()->user()->id  ? 'Vous avez dit : ' : $message->user->name . ' a dit :'}}
                    </p>
                    <p class="rounded-2xl text-center py-3 mb-1 font-medium
                    {{ $message->user->id === auth()->user()->id  ? 'bg-green-500 rounded-bl-none text-white mr-auto max-w-1/3 w-1/2' : 'ml-auto bg-gray-300 dark:bg-gray-700 rounded-tr-none  text-gray-700 dark:text-gray-100 max-w-1/2 w-1/2'}}">{{ $message->content }}</p>
                    </div>
                @endforeach
            </div>

            <form action="{{route('password.request')}}" method="post">
            @csrf
                <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
                    <div class="relative sm:mb-0 flex-grow w-full">
                        <input
                            wire:keydown.enter.prevent="sendMessage"
                            wire:model="message"
                            class="w-full mt-4 bg-gray-800 bg-opacity-40 rounded-full border border-gray-700 focus:border-green-500 focus:ring-2 focus:ring-green-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        >
                        <svg class="text-green-500 absolute transform top-6 right-2 rotate-90 h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                    </div>
                </div>
            </form>
        </div>
    </section>
