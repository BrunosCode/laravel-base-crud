@extends('layout.base')

@section('pageContent')
    <main class="c-main">
        @include('partials.hero')
        @include('partials.collection')
        @include('partials.shopBanner')
    </main>
@endsection
