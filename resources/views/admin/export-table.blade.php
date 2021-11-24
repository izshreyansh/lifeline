@foreach($resources as $resource)
    <tr>
        <td>{{ $resource->created_at->toFormattedDateString() }}</td>
        <td>{{ $resource->created_at->format('H:i') }}</td>
        <td>{{ $resource->createdby->name ?? 'N/A' }}</td>
        <td>{{ explode('\\',get_class($resource))[1] }}</td>
        <td>{{ $resource->category }}</td>
        <td>{{ $resource->gender }}</td>
        <td>{{ $resource->age }}</td>
        <td>{{ $resource->district }} {{ $resource->province }}</td>
        <td>{{ $resource->telephone }}</td>
        <td>{{ $resource->counselling_notes }}</td>
        <td>-</td>
        <td>{{ $resource->status }}</td>
        <td>{{ $resource->counselling_notes }}</td>
    </tr>
@endforeach
