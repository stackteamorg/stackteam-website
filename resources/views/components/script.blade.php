
@if (is_array($link))
@foreach ($link as $value)
<script src="{{ asset($value) }}"></script>
@endforeach
@else 
<script src="{{ asset($link) }}"></script>
@endif