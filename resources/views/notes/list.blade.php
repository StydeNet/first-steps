@extends('layout')

@section('content')
    <h2>Notes</h2>
    <p>
        <a href="{{ url('notes/create') }}">Add a note</a>
    </p>
    <ul class="list-group">
        @foreach ($notes as $note)
        <li class="list-group-item">
            <span class="label label-info">{{ $note->category->name }}</span> 
            {{ $note->note }}
        </li>
        @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection