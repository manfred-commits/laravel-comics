@extends('layout.base')

@section('mainContent')
    <section class="general-content-formatting flex-center">
        <div class="title-section">
            <button>CURRENT SERIES</button>
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
    <div class="features-line">
        <section class="general-content-formatting site-features">
    
            <ul>
                <li>
                    <a href="#">
                        <div class="container-img">
                            
                            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                            
                        </div>
                        <h4>DIGITAL COMICS</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="container-img">
                            
                            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                            
                        </div>
                        <h4>DC MERCHANDISE</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="container-img">
                            
                            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                            
                        </div>
                        <h4>SUBSCRIPTION</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="container-img">
                            
                            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                            
                        </div>
                        <h4>COMIC SHOP LOCATION</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="container-img">
                            
                            <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                            
                        </div>
                        <h4>DC POWER VISA</h4>
                    </a>
                </li>
            </ul>
    
        </section>
    </div>
@endsection