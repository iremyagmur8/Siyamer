@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    @php
        use App\Http\Controllers\HomepageController
    @endphp
    @isset($vars->contact)
            <section class="parallax text-light fullscreen"
                     data-bg-parallax="{{Storage::url("images/userfiles/". $vars->contact->files[0]->file)}}">
                <div class="bg-overlay"></div>
                <div class="container mr-0">
                    <div class="row" style="margin-right: -20px" >
                        <div class="col-lg-6 m-t-50">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102419.50261553114!2d28.90834315453004!3d40.22104721521466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca1426d04a0093%3A0xaafb594366310754!2zQnVwYXIgQXJhxZ90xLFybWEgRGFuxLHFn21hbmzEsWs!5e0!3m2!1str!2str!4v1637673620571!5m2!1str!2str" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-5 offset-lg-1 m-t-50">
                            <div class="container-fullscreen" style="background: #9d2429;
    padding: 40px;">
                                <div>
                                    <h2 class="text-uppercase " data-animate="fadeInDown"
                                        data-animate-delay="100">{!! $vars->contact->title !!}</h2>
                                    <p class="lead" data-animate="fadeInDown"
                                       data-animate-delay="300">{!!$vars->contact->description !!}</p>
                                    <address>
                                        {!!$vars->contact->address !!}
                                        <br><br>
                                        <a href="tel:{!!$vars->contact->phone !!}">Tel:&nbsp;{!!$vars->contact->phone !!} </a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
    @endisset
@endsection
