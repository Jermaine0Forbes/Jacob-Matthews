@extends('layout')



@section('title', 'Jacob Matthews Furniture Store')

@section('content')
    <div class="container slim center">
            <section class="row no-mar ">
                <div class="row justify-content-center fluid headline highlights">
                    <div class="col-md-4">
                        <a href="#">
                            <span class="h5"><i class="fa fa-star"></i> <strong>up to 30% off* sitewide</strong></span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <span class="h5"><i class="fa fa-star"></i> <strong>huge savings on room packages</strong></span>
                        </a>

                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <span class="h5"><i class="fa fa-star"></i> <strong>up to 75% off* closeouts</strong></span>
                        </a>
                    </div>
                </div>
                <div class="fluid pad-half padH">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Furniture</li>
                    </ol>
                </div>
                <div class="pad-half  col headline ">
                     <h2 >
                        Furniture
                    </h2>
                </div>

                <div class="fluid pad-half ">
                    <div id="slider">
                        <ul class="slide">
                            <li>
                                <img class="img-fluid" src="/img/slide1.jpg" alt="furniture picture"/>
                                <!-- <div class="slide-description hidden-sm-down">
                                    <p class="h5">furniture 1</p>
                                </div> -->
                            </li>
                            <li>
                                <img class="img-fluid" src="/img/slide2.jpg"  alt="furniture picture"/>
                            </li>
                            <li>
                                <img class="img-fluid" src="/img/slide3.jpg"  alt="furniture picture"/>
                            </li>
                            <li>
                                <img class="img-fluid" src="/img/slide4.jpg"  alt="furniture picture"/>
                            </li>

                        </ul>
                    </div>

                </div>
                <div  class="row no-mar furniture-trio">
                    <div class="col-sm-4 col-6 pad-half f-item">
                        <a href="#">
                            <div class="overflow">
                                <img  class="img-fluid" src="/img/dining-1.jpg" alt="shop images">
                            </div>
                            <h3>shop <span>dining rooms</span>  <i class="fa fa-arrow-circle-right"></i></h3>
                        </a>
                    </div>
                    <div class="col-sm-4 col-6 pad-half f-item">
                        <a href="#">
                            <div class="overflow">
                                <img  class="img-fluid" src="/img/office-1.jpg" alt="shop images">
                            </div>
                            <h3>shop <span>home offices</span>  <i class="fa fa-arrow-circle-right"></i></h3>
                        </a>

                    </div>
                    <div class="col-sm-4 hidden-xs-down pad-half f-item">
                        <a href="#">
                            <div class="overflow">
                                <img  class="img-fluid" src="/img/entry-1.jpg" alt="shop images">
                            </div>
                            <h3>shop <span>entryways</span>  <i class="fa fa-arrow-circle-right"></i></h3>
                        </a>
                    </div>
                </div>


                <div class="fluid pad-half ">
                    <img class="img-fluid" src="/img/bedroom-1.jpg" alt="bedroom">
                </div>



                <div  class="row no-mar furniture-trio">
                    <div class="col-sm-4 col-6 pad-half f-item">
                        <a href="#">
                            <div class="overflow">
                                <img  class="img-fluid" src="/img/lifestyle-1.jpg" alt="shop images">
                            </div>
                            <h3>shop <span>Jacob Lifestyles</span>  <i class="fa fa-arrow-circle-right"></i></h3>
                        </a>
                    </div>
                    <div class="col-sm-4 col-6 pad-half f-item">
                        <a href="#">
                            <div class="overflow">
                                <img  class="img-fluid" src="/img/kids-1.jpg" alt="shop images">
                            </div>
                            <h3>shop <span>kids</span>  <i class="fa fa-arrow-circle-right"></i></h3>
                        </a>

                    </div>
                    <div class="col-sm-4  hidden-xs-down pad-half f-item">
                        <a href="#">
                            <div class="overflow">
                                <img  class="img-fluid" src="/img/exclusive-1.jpg" alt="shop images">
                            </div>
                            <h3>shop <span>Jacob Executives</span>  <i class="fa fa-arrow-circle-right"></i></h3>
                        </a>
                    </div>
                </div>
            </section>

            <section id="instagram" class="pad padV" >
                <div class="row no-mar justify-content-center ">
                    <div class="fluid">
                        <h3 class="text-center">#MyJacobHome</h3>
                        <p class="text-center">
                            We LOVE to see your style! Hashtag <span class="bold">#MyJacobHome</span> on Instagram. Full gallery here.
                        </p>
                    </div>
                    <div class="row no-mar fluid">
                        <div class="jacob-carousel fluid pad-half">
                            <img class="" src="/img/caro-1.jpg" alt="carousel furniture image">
                            <img class="" src="/img/caro-2.jpg" alt="carousel furniture image">
                            <img class="" src="/img/caro-3.jpg" alt="carousel furniture image">
                            <img class="" src="/img/caro-4.jpg" alt="carousel furniture image">
                            <img class="" src="/img/caro-5.jpg" alt="carousel furniture image">
                            <img class="" src="/img/caro-6.jpg" alt="carousel furniture image">
                            <img class="" src="/img/caro-7.jpg" alt="carousel furniture image">
                            <img class="" src="/img/caro-8.jpg" alt="carousel furniture image">
                        </div>
                    </div>

                </div>
                <div class="row no-mar justify-content-center">
                    <p class="pad-half">
                        Your home is about so much more than the walls that surround you; it’s about what is inside. Your family. Your friends. Your cat that cuddles with you. And your furniture, of course.
Your abode is your dwelling place that reflects your unique style. It is a place for you to rest, to love, to entertain, to grow, to create memories. You do all of this with the backdrop of how you choose to decorate.
Your living room, dining room, and bedrooms share the story of who you are through your desks, sofas, beds, and tables. Every aspect of your home—from your home office furniture to lighting and accessories—speaks volumes about what is important to you.
This is where you can be authentically you. This is your home.
                    </p>
                </div>

            </section><!-- instagram -->

        </div>

@endsection
