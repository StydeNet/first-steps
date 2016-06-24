@extends('layout')

@section('content')
    <h2>Notes</h2>
    <p>
        <a href="{{ url('notes/create') }}">Add a note</a>
    </p>
    <ul class="list-group">
        @foreach ($notes as $note)
            @include('notes.partials.item-list', compact('note'))
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection