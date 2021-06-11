
@extends('layouts.app')

@section('content')

@can('access-client')
<section class="text-gray-400 body-font bg-gray-900">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 py-10 mx-auto flex items-center md:flex-row flex-col">
              <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
                <h2 class="text-xs text-green-400 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
                <h1 class="md:text-3xl text-2xl font-medium title-font text-white">Master Cleanse Reliac Heirloom</h1>
              </div>
              <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0 space-x-4">

                <a href="{{route('jobs.create')}}" class="bg-gray-800 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-700 hover:bg-opacity-50 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                  <span class="ml-4 flex items-start flex-col leading-none">
                    <span class="title-font font-medium">Ajouter</span>
                  </span>
                </a>
              </div>
            </div>
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
                    <span class="bg-gray-900 borde text-xs p-1 w-40 my-2 inline-block text-green-500 rounded">

                        Déjà validé

                    </span>
                    @else
                    <a href="{{ route('confirm.proposal', [$proposal->id])}}" class="bg-green-500 text-xs py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-green-200 hover:text-green-500 duration-200 transition rounded">Valider la proposition</a>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endcan
@can('access-free')
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Proposition Envoyés ({{ $proposals->count() }})</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep.</p>
            </div>
        <div class="flex flex-wrap -mx-4 -my-8">
            @foreach($proposals as $proposal)
            <div class="py-8 px-4 lg:w-1/3">
            <div class="h-full flex items-start">
                <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                <span class="text-gray-400 pb-2 mb-2 border-b-2 border-gray-700">{{$proposal->created_at->format('M')}}</span>
                <span class="font-medium text-lg leading-none text-gray-300 title-font">{{$proposal->created_at->format('d')}}</span>
                </div>
                <div class="flex-grow pl-6">
                @if ($proposal->validated)
                    <h2 class="tracking-widest text-xs title-font font-medium text-green-400 mb-1">VALIDE</h2>
                @else
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-200 mb-1">EN ATTENTE</h2>
                @endif
                <h1 class="title-font text-xl font-medium text-white mb-3">{{ $proposal->job->title }}</h1>
                <p class="leading-relaxed mb-5">{{ $proposal->coverLetter->content }}.</p>

                </div>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
@endcan
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">missions favorites ({{ auth()->user()->likes()->count() }})</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep.</p>
        </div>

      <div class="flex flex-wrap -m-4">
        @foreach(auth()->user()->likes as $like)
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-800 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">CATEGORY</h2>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-white mb-3">{{ $like->title }}</h1>
            <p class="leading-relaxed mb-3">{{ Illuminate\Support\Str::limit($like->description, 120, '...')}}</p>
            <a href="{{ route('jobs.show', $like->id) }}"  class="text-green-400 inline-flex items-center">Learn More
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</section>

@endsection
