@extends('layout')

@section('content')
    <h2>Note Content:</h2>
    <p>
        @include('categories.partials.label', ['category' => $note->category])
        {{ $note->note }}
    </p>
@endsection