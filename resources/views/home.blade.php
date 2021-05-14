@extends('layouts.app')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
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
        <div class="flex flex-col md:w-1/2 md:pl-12">
            <h2 class="title-font font-semibold text-gray-800 tracking-wider text-xl">missions favorites ({{ auth()->user()->likes()->count() }})</h2>
            @foreach(auth()->user()->likes as $like)
            <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">{{ $like->title }}</h2>
            <p class="leading-relaxed mb-8">{{$like->description}}</p>
            @endforeach
        </div>
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="flex flex-wrap w-full">
            <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
                <div class="flex relative pb-12">
                    <span class="block font-semibold">
                        Vos missions ({{ auth()->user()->jobs()->count() }})</h2>
                    </span>
                </div>
                @foreach(auth()->user()->jobs as $job)
                <div class="flex-grow pl-4">
                    {{ $job->title }} ({{ $job->proposals->count() }} @choice('proposition|propositions', $job->proposals))
                    @foreach($job->proposals as $proposal)
                    <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">{{ $proposal->user->name }}</h2>
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
    </div>
</div>
</section>
@endsection
