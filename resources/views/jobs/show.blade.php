@extends('layouts.app')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
        <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $id->title }}</h1>
            <p class="mb-8 leading-relaxed">{{ $id->description }}</p>
            <div class="flex w-full justify-center items-end">
                <a
                    href="{{ route('proposals.submit', $id->id) }}"
                    class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg"
                >
                    <svg class="w-5 h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"    clip-rule="evenodd" />
                    </svg>
                    Soumettre une proposition
                </a>
            </div>
        <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Neutra shabby chic ramps, viral fixie.</p>
        </div>
    </div>
</section>
@endsection