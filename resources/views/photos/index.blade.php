@extends('layouts.layout-bootstrap')

@section('content')

@if(session('success'))
<div>
    {{session('success')}}
</div>
@endif

@if(count($photos) == 0)

<h1>You have 0 photos</h1>

@else

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Url</th>
            <th>Preview</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($photos as $photo)
        <tr>
            <td>{{$photo -> id}}</td>
            <td>{{$photo -> title}}</td>
            <td>{{$photo -> url}}</td>
            <td><img src="{{$photo -> url}}" alt="photo"></td>
        </tr>

        @endforeach
    </tbody>
</table>

@endif
@endsection
