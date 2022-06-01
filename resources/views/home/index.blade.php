@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    @php
        use App\Http\Controllers\HomepageController
    @endphp
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        @isset($cData->place[1])
            @foreach($cData->place[1] as $key=>$val)
                <div class="slide"
                     @isset($val->files[0]->file) @if(pathinfo($val->files[0]->file, PATHINFO_EXTENSION) == 'mp4')  data-bg-video="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"
                     @else data-bg-image="{{Storage::url("images/userfiles/". $val->files[0]->file)}}" @endif @endisset>
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="slide-captions text-center text-light">

                            <h1 data-animate="fadeInUp" data-animate-delay="600">{!! nl2br($val->title) !!}</h1>
                            {!! $val->description !!}
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
@endsection
