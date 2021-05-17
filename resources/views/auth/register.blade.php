@extends('layouts.app')

@section('content')
<section class="text-gray-600 dark:text-gray-400 dark:bg-gray-900 body-font">
    <form method="POST" action="{{ route('register') }}" >
        @csrf
        <div class="container px-5 py-20 mx-auto flex flex-wrap items-center">
            <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                <h1 class="title-font font-medium text-3xl text-gray-900 dark:text-white">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
                <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p>
            </div>
            <div class="lg:w-2/6 md:w-1/2 bg-gray-100 dark:bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-900 dark:text-white text-lg font-medium title-font mb-5">Sign Up</h2>
                <div class="relative ">
                    <label for="name" class="leading-7 text-sm text-gray-600 dark:text-gray-100">name</label>
                    <input type="name" id="name" name="name" class="w-full bg-white rounded border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-indigo-500 focus:ring-2 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('name') }}" autofocus>
                    @error('name')
                    <span class="text-red-400 text-sm">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="relative ">
                    <label for="email" class="leading-7 text-sm text-gray-600 dark:text-gray-100">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-indigo-500 focus:ring-2 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-red-400 text-sm">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="relative ">
                    <label for="password" class="leading-7 text-sm text-gray-600 dark:text-gray-100">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full bg-white rounded border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-indigo-500 focus:ring-2 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative">
                    <label for="password_confirmation" class="leading-7 text-sm text-gray-600 dark:text-gray-100"">Retapez le mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"  class="w-full bg-white rounded border dark:bg-gray-600 dark:bg-opacity-30  border-gray-300 focus:border-indigo-500 focus:ring-2 text-base outline-none text-gray-700 dark:text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation">
                    @error('password_confirmation')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-between items-center" >
                    <label for="freelance">Developpeur
                        <input class="dark:text-gray-100" type="radio" value="1" id="freelance" name="role_id">
                        <span class="checkmark "></span>
                    </label>
                    <label for="client">Client
                        <input class="dark:text-gray-100" type="radio" value="2" id="client" name="role_id">
                        <span class="checkmark "></span>
                    </label>
                </div>
                @error('role_id')
                    <span class="text-red-400 text-sm block">{{ $message }}</span>
                @enderror
                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 mt-3 focus:outline-none hover:bg-indigo-600  rounded text-lg">Se connecter</button>
            </div>
        </div>
    </form>
  </section>
@endsection

