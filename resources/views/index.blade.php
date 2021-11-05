@extends('layout.base')

@section('mainContent')
    <div class="title-section">
        <h2>CURRENT SERIES</h2>
    </div>
    <div class="container-comics">
        <div class="comic-card">
            @foreach ($data as $comic)
                <div class="img-container">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                <h4>{{$comic['title']}}</h4>

            @endforeach
        </div>
    </div>
    <div class="btn-container">
        <button>LOAD MORE</button>
    </div>
@endsection