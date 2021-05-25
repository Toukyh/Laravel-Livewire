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
    <form action="{{route('verification.send')}}" method="post">
      @csrf
      <div class="relative sm:mb-0 flex-grow w-full text-center">
          <button type="submit" class= " text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Resend Email</button>
     </div>
    </div>
</form>
    </div>
  </section>
@endsection

