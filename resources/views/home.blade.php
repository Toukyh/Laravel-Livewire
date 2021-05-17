
@extends('layouts.app')

@section('content')
@if (auth()->user()->role_id == 1)
<section class="text-gray-400 body-font bg-gray-900">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h2 class="text-xs text-green-400 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white"> Vos missions ({{ auth()->user()->jobs()->count() }})</h2></h1>
        </div>
        <div class="flex flex-wrap">
            @foreach(auth()->user()->jobs as $job)
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-800">
                <h2 class="text-lg sm:text-xl text-white font-medium title-font mb-2">{{ $job->title }} </h2>
                <p class="leading-relaxed text-base mb-4">({{ $job->proposals->count() }} @choice('proposition|propositions', $job->proposals))</p>
                @foreach($job->proposals as $proposal)
                    <p>{{ $proposal->user->name }}</p>
                    <p class="leading-relaxed">{{ $proposal->coverLetter->content }}"</p>
                    @if ($proposal->validated)
                    <span class="bg-white border border-green-500 text-xs p-1 my-2 inline-block text-green-500 rounded">Déjà validé</span>
                    @else
                    <a href="{{ route('confirm.proposal', [$proposal->id])}}" class="bg-green-500 text-xs py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-green-200 hover:text-green-500 duration-200 transition rounded">Valider la proposition</a>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<section class="text-gray-600 body-font">
        @if (auth()->user()->role_id == 2)
        <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
            @foreach($proposals as $proposal)
                <h1 class="sm:text-xl text-xl font-medium title-font mb-2 text-gray-900">Proposition Envoyés ({{ $proposals->count() }})</h1>
                <h2 class="sm:text-2xl text-xl title-font font-medium text-gray-600 mt-4 mb-4">{{ $proposal->job->title }}</h2>
                <p class="leading-relaxed text-base">{{ $proposal->coverLetter->content }}.</p>
                @if ($proposal->validated)
                <h3 class="text-green-500 font-bold">Validé</h3>
                @else
                <h3 class="text-gray-500">En attente</h3>
                @endif
            @endforeach
        </div>
        @endif
    </div>
</section>
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4">missions favorites ({{ auth()->user()->likes()->count() }})</h1>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
          @foreach(auth()->user()->likes as $like)
        <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-5 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">{{ $like->title }}</h2>
            <p class="leading-relaxed text-base">{{$like->description}}</p>
            <a class="mt-3 text-indigo-400 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        @endforeach
    </div>
  </section>

@endsection
