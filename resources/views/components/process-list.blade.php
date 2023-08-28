@foreach ($process as $counter => $item) 
    <x-process-item :item="$item" :counter="$counter + 1" />
@endforeach