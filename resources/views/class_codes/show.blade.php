@extends('support::amp')

@section('content')
    <section class="container mx-auto mt-16 max-w-3xl">
        <h1 class="text-5xl font-serif">{{ $classCode->title }}</h1>
        <h2 class="text-2xl mt-4">{{ $classCode->phraseology }}</h2>

        <div class="mt-8">{!! $classCode->description !!}</div>
    </section>
@endsection
