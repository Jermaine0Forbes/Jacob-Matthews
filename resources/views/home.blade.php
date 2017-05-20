@extends('layout')

@section('title', 'Jacob')

@section('content')
    <div class="fluid-8 center">
            <section class="row no-mar pad padV">
                <div class="pad-half padV col headline ">
                     <h3 >
                        Furniture
                    </h3>
                </div>

                <div class="fluid pad-half padV">
                    <div id="slider">
                        <ul class="slide">
                            <li>
                                <img class="img-fluid" src="/img/slide1.jpg" alt="furniture picture"/>
                                <div class="slide-description hidden-sm-down">
                                    <p class="h5">furniture 1</p>
                                </div>
                            </li>
                            <li>
                                <img class="img-fluid"src="/img/slide2.jpg"  alt="furniture picture"/>
                                <div class="slide-description hidden-sm-down">
                                    <p class="h5">furniture 2</p>
                                </div>
                            </li>
                            <li>
                                <img class="img-fluid" src="/img/slide3.jpg"  alt="furniture picture"/>
                                <div class="slide-description hidden-sm-down">
                                    <p class="h5">furniture 3</p>
                                </div>
                            </li>
                            <li>
                                <img class="img-fluid" src="/img/slide4.jpg"  alt="furniture picture"/>
                                <div class="slide-description hidden-sm-down">
                                    <p class="h5">furniture 4</p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </section>
            @include('home-featured')
        </div>

@endsection
