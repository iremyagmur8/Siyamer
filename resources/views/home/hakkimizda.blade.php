@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    @php
        use App\Http\Controllers\HomepageController
    @endphp
    @isset($cData->hakkimizda)
        @foreach($cData->hakkimizda as $key=>$val)
            <section class="parallax text-light fullscreen"
                     data-bg-parallax="{{Storage::url("images/userfiles/". $val->files[0]->file)}}">
                <div class="bg-overlay"></div>
                <div class="container mr-0">
                    <div class="row" style="margin-right: -20px">
                        <div class="col-lg-7">

                        </div>
                        <div class="col-lg-5 m-t-50">
                            <div class="container-fullscreen" style="background: #9d2429;
    padding: 40px;">
                                <div>
                                    <h2 class="text-uppercase " data-animate="fadeInDown"
                                        data-animate-delay="100">{!! $val->title !!}</h2>
                                    <p class="lead" data-animate="fadeInDown"
                                       data-animate-delay="300">{!! $val->description !!}</p>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </section>
        @endforeach
    @endisset
@endsection
