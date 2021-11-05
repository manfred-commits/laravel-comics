@extends('layout.base')

@section('mainContent')
    <section class="general-content-formatting flex-center">
        <div class="title-section">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="container-comics flex-center">
            @foreach ($data as $comic)
            <div class="comic-card">
                <div class="img-container">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                <h4>{{$comic['title']}}</h4>

            </div>
            @endforeach
        </div>
        <div class="btn-container">
            <button>LOAD MORE</button>
        </div>
    </section>
@endsection