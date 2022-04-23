@extends('template')
@section('content')
    <div class="container mt-3 mb-3">
        <div class="gallery">
            @foreach($images as $image)
            <div class="gallery-item">
                <img class="gallery-img" src="{{asset($image->image)}}" alt="itirepaire">
            </div>
            @endforeach
        </div>
    </div>
@endsection