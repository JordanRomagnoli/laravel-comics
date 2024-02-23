@extends('layouts.app')

@section('page-title', 'Comix')

@section('main-content')
    <div class="jumbotron">
    </div>

    <div class="container">
        <h1>
            Current Series
        </h1>

        <div class="comix-container">
            <div class="row g-0  flex-wrap justify-content-center ">
                @foreach($comics as $comic)
                    @include('partials.comic')
                @endforeach
            </div>

            <button>Load more</button>
        </div>
    </div>

    <section class="bottom-main">
        <div class="container">
            <div class="row justify-content-between ">
                @foreach($info as $singleInfo)
                    <div class="info-card">
                        <div class="icon-frame">
                            <img src="{{ Vite::asset($singleInfo['img']) }}" alt="">
                        </div>

                        <span>{{ $singleInfo['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection
