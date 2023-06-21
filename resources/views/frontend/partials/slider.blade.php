
    <!-- CAROUSEL -->
    <div class="slider-container">
        <div class="container-slider-image-full  ">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item banner-max-height">
                        <img class="d-block w-100" src="{{asset('frontend/images/1920x1080.jpg')}}" alt="First slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms"
                                                    class="text-white animated fadeInDown">
                                                 سما وجهتك الأولى للعقار</h2>
                                                <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"
                                                    class="text-white animated fadeInUp">

                                                    إمتلك منزلك في عالم من الإبداع والتميز. مع سما<br> ستعيش تجربة عقارية لا تضاهى
                                                </p>
                                                <a href="{{route('contact')}}" data-animation="fadeInUp" data-delay=".6s"
                                                    data-duration="1000ms"
                                                    class="btn btn-primary text-uppercase animated fadeInUp">
                                                    تواصل معنا الآن
                                                    <i class="fa fa-angle-right arrow-btn "></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active banner-max-height">
                        <img class="d-block w-100" src="{{asset('frontend/images/bg5.jpg')}}" alt="First slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms"
                                                    class="text-white animated fadeInDown">
                                                 سما وجهتك الأولى للعقار</h2>
                                                <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"
                                                    class="text-white animated fadeInUp">

                                                    إمتلك منزلك في عالم من الإبداع والتميز. مع سما<br> ستعيش تجربة عقارية لا تضاهى
                                                </p>
                                                <a href="{{route('contact')}}" data-animation="fadeInUp" data-delay=".6s"
                                                    data-duration="1000ms"
                                                    class="btn btn-primary text-uppercase animated fadeInUp">
                                                    تواصل معنا الآن
                                                    <i class="fa fa-angle-right arrow-btn "></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span> -->
                <span class="carousel-control-nav-prev">
                    <i class="fa fa-2x fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span> -->
                <span class="carousel-control-nav-next">
                    <i class="fa fa-2x fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- END CAROUSEL -->
    <!-- END CAROSUEL -->
    <div class="clearfix"></div>

    <div class="search__area search__area-1" id="search__area-1">
        <div class="container">
            <div class="search__area-inner">
                <form method="GET" action="{{route('search')}}">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select name="purpose" class="wide select_option">
                                <option value="ايجار">ايجار</option>
                                <option value="بيع">بيع</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select name="type" class="wide select_option">
                                <option value="شقة">شقة</option>
                                <option value="بيت">بيت</option>
                                <option value="ملحق">ملحق</option>
                                <option value="عمارة">عمارة</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select name="bedroom" class="wide select_option">
                                <option value="" disabled selected>عدد الغرف</option>
                                @if(isset($bedroomdistinct))
                                     @foreach($bedroomdistinct as $bedroom)
                                         <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                     @endforeach
                                 @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3">
                        <div class="form-group">
                                <input class="form-control" type="text" name="city" placeholder="مدينة-منطقة">
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 mx-auto">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary text-uppercase btn-block"> بحث <i
                                    class="fa fa-search ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
