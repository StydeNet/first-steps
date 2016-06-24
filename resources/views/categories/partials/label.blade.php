@if ($category)
    <span class="label label-info">{{ $category->name }}</span>
@else
    <span class="label label-info">Others</span>
@endif