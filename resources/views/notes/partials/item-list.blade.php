<li class="list-group-item">
    @include('categories.partials.label', ['category' => $note->category])
    {{ $note->summary }}
    <div class="pull-right">
        <a href="{{ url('notes/' . $note->id) }}">View note</a>
    </div>
</li>