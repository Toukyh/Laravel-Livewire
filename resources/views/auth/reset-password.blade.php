@extends('layouts.app')

@section('content')
<section class="text-gray-600 dark:text-gray-400 dark:bg-gray-900 body-font">
    <form method="POST" action="{{ route('password.update') }}" >
        @csrf
        <div class="container px-5 py-20 mx-auto flex flex-wrap items-center">
            <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                <h1 class="title-font font-medium text-3xl text-gray-900 dark:text-white">Password reset</h1>
                <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p>
            </div>
            <div class="lg:w-2/6 md:w-1/2 bg-gray-100 dark:bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-900 dark:text-white text-lg font-medium title-font mb-5">Reset</h2>
                <div class="relative ">
                    <input type="hidden" name="token" value="{{$request->route('token')}}">
                    <label for="email" class="leading-7 text-sm text-gray-600 dark:text-gray-100">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{$request->email}}" >
                    @error('email')
                    <span class="text-red-400 text-sm">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="relative ">
                    <label for="password" class="leading-7 text-sm text-gray-600 dark:text-gray-100">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full bg-white rounded border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative">
                    <label for="password_confirmation" class="leading-7 text-sm text-gray-600 dark:text-gray-100"">Retapez le mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full bg-white rounded border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation">
                    @error('password_confirmation')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="text-white bg-green-500 border-0 py-2 px-8 mt-3 focus:outline-none hover:bg-green-600  rounded text-lg">Reset</button>
            </div>
        </div>
    </form>
  </section>

@endsection

