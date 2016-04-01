@extends('layout')

@section('content')

    <h3>Notes #{{ $note->id }}</h3>
    <div class="text-right">
        <a href="{{ url('notes') }}">View all notes</a>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            <h4>Note</h4>
            {{ $note->note }}
        </li>
        @if($note->category)
        <li class="list-group-item">
            <h4>Category</h4>
            {{ $note->category->name }}
        </li>
        @endif
        <li class="list-group-item">
            <h4>Created</h4>
            {{ $note->created_at->diffForHumans() }}
        </li>
    </ul>
@endsection