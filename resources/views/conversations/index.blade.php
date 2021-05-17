@extends('layouts.app')

@section('content')
  <section class="text-gray-600 dark:bg-gray-900 dark:text-gray-100 body-font">
      <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-2">
            @foreach($conversations as $conversation)
              <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 dark:border-gray-600 border p-4 rounded-lg">
                    <a class="flex-grow" href="{{ route('conversation.show', $conversation->id) }}">
                        <p class="text-gray-500 ">{{ Illuminate\Support\Str::limit($conversation->messages->last()->content, 50) }}</p>
                        <p class="font-thin item-right font-semibold text-gray-600 dark:text-gray-300">{{ auth()->user()->id === $conversation->messages->last()->user->id ? "vous, " : $conversation->messages->last()->user->name }}  {{ $conversation->messages->last()->created_at->diffForHumans() }}</p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
