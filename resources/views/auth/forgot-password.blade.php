@extends('layouts.app')

@section('content')
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Master Cleanse Reliac Heirloom</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep.</p>
      </div>
      @if (session('status'))
            <p class="mb-4 font-medium text-sm text-center text-green-500">{{session('status')}}</p>
      @endif
    <form action="{{route('password.request')}}" method="post">
      @csrf
      <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end sm:space-x-4 sm:space-y-0 space-y-4">
        <div class="relative sm:mb-0 flex-grow w-full">
          <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-green-500 focus:ring-2 focus:ring-green-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          @error('email')
            <span class="text-red-400 text-sm">
                {{ $message }}
            </span>
        @enderror
    </div>
    <button type="submit" class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Reset</button>
    </div>
    </form>
    </div>
</section>
@endsection

