@extends('layouts.main')

@section('page-title')
    Home
@endsection

@section('page-content')
    <div class="container pt-3">
        @foreach ($comics as $comic)
            <div class="ms-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
                <div class="title">{{ $comic['series'] }}</div>
            </div>
        @endforeach
    </div>
    <button>LOAD MORE</button>
    </main>
    {{-- <AppPrefooter /> --}}
@endsection
