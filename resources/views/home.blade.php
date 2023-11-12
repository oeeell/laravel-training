@extends('layout')

@section('content')
<div class="row">

@foreach ( $movies as $movie )
<div class="col-4">
    <div class="card mb-3" style="width:300px">
        <img class="card-img-top" src="{{ asset('cover/'.$movie->photo) }}" alt="Card image" style="max-width:300px;">
        <div class="card-body">
        <h4 class="card-title">{{$movie->title}}</h4>
        <p class="card-text">{{$movie->description}}</p>
        <a href="{{ route('detail', ['id'=>$movie->id]) }}" class="btn btn-primary">Detail</a>
        </div>
    </div>
</div>
@endforeach  

</div>  
@endsection