@extends('frontend.layouts.app')

@section('content')

<section class="featured__property space-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        العقارات
                    </h2>
                    <p class="text-center text-capitalize">العقارات المميزه</p>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="featured__property-carousel owl-carousel owl-theme">
                    @foreach($properties as $property)

                    <div class="item">
                        <!-- TWO -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-uppercase">مميز</div>
                                @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                <img src="{{Storage::url('property/'.$property->image)}}" alt="{{ str_limit( $property->title, 18 ) }}" class="img-fluid w100 img-transition">
                                @else
                                <img src="{{$property->image}}" alt="{{ str_limit( $property->title, 18 ) }}" class="img-fluid w100 img-transition">

                                @endif

                                
                                <div class="info"> {{$property->status}}</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">{{$property->type}}</span>
                                <h6 class="text-capitalize">
                                    {{ str_limit( $property->title, 18 ) }}
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    {{ $property->address }} -  {{ $property->city }}
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span class="mr-5" dir="rtl">
                                            دورات المياه <br>
                                            <i class="fa fa-bath"></i> {{ $property->bathroom}}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="mr-5" dir="rtl">
                                            غرف <br>
                                            <i class="fa fa-bed"></i> {{ $property->bedroom}}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span dir="rtl">
                                            المساحة الأرضية <br>
                                            <i class="fa fa-map"></i> {{ $property->area}}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item text-center" dir="rtl">

                                        <h6> {{ $property->price }} ريال</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</section>


    <!-- ABOUT -->
    <section class="home__about bg-theme-v7">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7" dir="rtl">
                    <div class="title__leading">
                        <!-- <h6 class="text-uppercase">trusted By thousands</h6> -->
                        <h2 class="text-capitalize">لماذا تختارنا؟</h2>
                        <p class="text-justify">
                            تعمل سما على تحقيق تجربة استثنائية للعملاء، من خلال توفير مجموعة واسعة من الخيارات العقارية التي تتناسب مع احتياجاتهم وتفضيلاتهم. تعتبر سما جسرًا يربط بين الباحثين عن المنازل والعقارات المثالية وبين البائعين الراغبين في تحقيق أقصى قيمة لعقاراتهم.


                        </p>
                        <p class="text-justify">
                            تعزز سما التواصل الشفاف والعلاقات المستدامة مع العملاء، حيث تقدم استشارات مهنية وموثوقة للمساعدة في اتخاذ قرارات مستنيرة. تهدف الشركة إلى تحقيق رضا العملاء الكامل وتفوق توقعاتهم، من خلال تقديم خدمات عالية الجودة والكفاءة.

                        </p>
                        <a href="{{ route('PropertieRequest') }}" class="btn btn-primary mt-3 text-capitalize"> اطلب عقارك الآن
                            <i class="fa fa-angle-right ml-3 "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->




    <section class="projects__partner bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">شركائنا</h2>
                        <p class="text-center text-capitalize">نفتخر بشركاء النجاح الذين يقدمون الدعم لنا في المشاريع العقارية والتجارية المختلفة </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="projects__partner-logo">
                        <ul class="list-inline mb-0">
                            @foreach($partners as $partner)
                            @if(Storage::disk('public')->exists('partners/'.$partner->img))
            
                            <li class="list-inline-item">
                                <img src="{{Storage::url('partners/'.$partner->img)}}" alt="{{$partner->name}}" class="img-fluid">
                            </li>

                            @endif

                            @endforeach
            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection