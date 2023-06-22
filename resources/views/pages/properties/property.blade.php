@extends('frontend.layouts.app')



@section('content')

<div class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__breadcrumb-v1">
                    <ol class="breadcrumb mb-0 bg-light">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> </a></li>
                        <li class="breadcrumb-item active"> <a href="#">العقارات</a></li>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="search__area bg__shadow">
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
                <div class="col-6 col-lg-3 col-md-3">
                    <div class="form-group">
                        <input class="form-control" type="text" name="city" placeholder="مدينة-منطقة">
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-3 mx-auto">
                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase btn-block"> بحث <i
                                class="fa fa-search ml-1"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs__custom-v2 ">

                             @foreach($properties as $property)

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card__image card__box-v1">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-lg-3 col-xl-4">
                                        <div class="card__image__header h-250">
                                            <a href="{{ route('property.show',$property->slug) }}">
                                                <div class="ribbon text-capitalize">{{$property->status}}</div>
                                                @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)

                                                <img src="{{Storage::url('property/'.$property->image)}}" alt="{{ str_limit( $property->title, 18 ) }}" class="img-fluid w100 img-transition">
                                                @else
                                                <img src="{{$property->image}}" alt="{{ str_limit( $property->title, 18 ) }}" class="img-fluid w100 img-transition">

                                                @endif
                                                <div class="info"> {{$property->purpose}}</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                        <div class="card__image__body">

                                            <span
                                                class="badge badge-primary text-capitalize mb-2">{{$property->type}}</span>
                                            <h6>
                                                <a href="{{ route('property.show',$property->slug) }}">{{ str_limit( $property->title, 18 ) }}</a>
                                            </h6>
                                            <div class="card__image__body-desc">
                                                <!-- <p class="text-capitalize">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                    </p> -->
                                                <p class="text-capitalize">
                                                    <i class="fa fa-map-marker"></i>
                                                    {{ $property->address }} -  {{ $property->city }}
                                                </p>
                                            </div>

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
                                    </div>
                                    <div
                                        class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                        <div class="card__image__footer">
                                            <ul class="list-inline my-atuo ml-auto price">
                                                <li class="list-inline-item " dir="rtl">

                                                    <h6> {{ $property->price }} ريال</h6>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                                    <div class="clearfix"></div>

                                    {{ $properties->links() }}

                            <!-- END FILTER VERTICAL -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

        
@endsection
