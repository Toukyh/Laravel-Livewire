@extends('layouts.app')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            @foreach($jobs as $job)
              <livewire:job :job="$job">
            @endforeach
        </div>
      </div>
  </section>
@endsection
