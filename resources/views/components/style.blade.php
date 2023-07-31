@if (is_array($link))
@foreach ($link as $value)
<link rel="stylesheet" href="{{ asset($value) }}" />
@endforeach
@else 
<link rel="stylesheet" href="{{ asset($link) }}" />
@endif