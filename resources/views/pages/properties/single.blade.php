@extends('frontend.layouts.app')

@section('content')
<div class="clearfix"></div>

<div class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__breadcrumb-v1">
                    <ol class="breadcrumb mb-0 bg-light">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> </a></li>
                        <li class="breadcrumb-item"> <a href="{{route('property')}}">قائمة العقارات</a></li>
                        <li class="breadcrumb-item active"> <span class="text-capitalize"> {{ $property->title }}</span>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single__detail-area">
    <div class="container">
        @if (session()->has('message'))
        <div class="text-center alert alert-light">
            <h3 style="font-weight: bold; color:#000">{{ session('message') }}</h3>
        </div>
        @endif

        <div class="row">
            <div class="col-md-9 col-lg-8">
                <div class="single__detail-area-title">
                    <h3 class="text-capitalize">{{ $property->title }}</h3>
                    <p> {{ $property->address }} -  {{ $property->city }}</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-4">
                <div class="single__detail-area-price">
                    <h4 class="text-capitalize text-gray" dir="rtl">{{ $property->price }} ريال</h4>
                    <ul class="list-inline">


                        <li class="list-inline-item">
                            <a target="_blank" href="whatsapp://send?text={{Request::url()}}" title="واتساب" class="badge badge-primary p-2 rounded"><i class="fa fa-whatsapp"></i></a>
                        </li>
                        <li class="list-inline-item">
                            @if(!$fav)
                            <a href="{{route('favorite.create',$property->id)}}" class="badge badge-primary p-2 rounded"><i class="fa fa-heart" title="المفضلة"></i></a>
                            @else
                            <a href="{{route('favorite.delete',$property->id)}}" class="badge badge-primary p-2 rounded"><i class="fa fa-heart" title="الغاء من المفضلة"></i></a>
                            @endif
                        </li>

                        <li class="list-inline-item">
                            <a href="https://twitter.com/intent/tweet?text= مشاركة العقار {{Request::url()}}" target="_blank" title="تويتر" class="badge badge-primary p-2 rounded"><i class="fa fa-twitter"></i></a>
                        </li>

                        <li class="list-inline-item">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" title="فيس بوك" class="badge badge-primary p-2 rounded"><i class="fa fa-facebook-f"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="slider__property bg-light">

    <div class="slider__property-carousel-opacity owl-carousel owl-theme">

        @if(!$property->gallery->isEmpty())

        @foreach($property->gallery as $gallery)

        <div class="item">
            <a href="{{Storage::url('property/gallery/'.$gallery->name)}}">
                <img src="{{Storage::url('property/gallery/'.$gallery->name)}}" alt="{{$property->title}}" class="img-fluid">
            </a>
        </div>

        @endforeach

        @else

        @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
        <div class="item">
            <a href="{{Storage::url('property/'.$property->image)}}">
                <img src="{{Storage::url('property/'.$property->image)}}" alt="{{$property->title}}" class="img-fluid">
            </a>
        </div>
        @else
        <div class="item">
            <a href="{{$property->image}}">
                <img src="{{$property->image}}" alt="{{$property->title}}" class="img-fluid">
            </a>
        </div>

        @endif

    @endif

    </div>

</div>



<section class="single__Detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- DESCRIPTION -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single__detail-desc">
                            <h5 class="text-capitalize detail-heading mt-0">وصف العقار</h5>
                            <div class="show__more">
                                {!! $property->description !!}

                                <a href="javascript:void(0)" class="show__more-button ">اقرا المزيد</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- PROPERTY DETAILS SPEC -->
                        <div class="single__detail-features">
                            <h5 class="text-capitalize detail-heading text-center">تفاصيل العقار</h5>
                            <!-- INFO PROPERTY DETAIL -->
                            <div class="property__detail-info" > 
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <ul class="property__detail-info-list list-unstyled">
                                            <li><label><i class="fa fa-square"></i> المساحة:</label>  <span>{{ $property->area}}</span></li>
                                            <li><label><i class="fa fa-building"></i> المدينة:</label> <span>{{ $property->city}}</span></li>
                                            <li><label><i class="fa fa-info"></i> الغرض:</label><span>{{ $property->purpose }}</span></li>
                                            <li><label><i class="fa fa-bed"></i>  غرف:</label>  <span>{{ $property->bedroom}}</span></li>
                                            <li><label><i class="fa fa-bath"></i> دورات مياه: </label> <span>{{ $property->bathroom}}</span></li>
                        
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- END INFO PROPERTY DETAIL -->
                        </div>
                        <!-- END PROPERTY DETAILS SPEC -->
                        <div class="clearfix"></div>


                        <!-- FEATURES -->
                        <div class="single__detail-features">
                            <h5 class="text-capitalize detail-heading text-center">خصائص العقار</h5>
                            <ul class="list-unstyled icon-checkbox">
                                @foreach($property->features as $feature)

                                <li>{{$feature->name}}</li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- END FEATURES -->

                        <div class="single__detail-features">
                            <h5 class="text-capitalize detail-heading text-center">تخطيط الأرض</h5>
                            <!-- FLOR PLAN IMAGE -->
                            <div id="accordion" class="floorplan" role="tablist">
                                <div class="card">
                                    <div id="collapseOne" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <figure>
                                                @if(Storage::disk('public')->exists('property/'.$property->floor_plan) && $property->floor_plan)

                                                <img src="{{Storage::url('property/'.$property->floor_plan)}}" alt="{{$property->title}}" class="img-fluid">
                                                @endif

                                            </figure>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @if($videoembed)

                        <div class="single__detail-features">
                            <h5 class="text-capitalize detail-heading text-center">مقطع فيديو للعقار</h5>
                            <div class="single__detail-features-video">
                                <figure class=" mb-0">
                                    <div class="home__video-area text-center">
                                        {!! $videoembed !!}
                                    </div>

                                </figure>
                            </div>
                        </div>
                        @endif

                        <!-- RATE US  WRITE -->
                        <div class="single__detail-features">
                            @if(Session::has('errors'))
                            <div class="text-center alert alert-light">
                              <h5 style="font-weight: bold;">فضلاً قم بملىء كل الحقول</h5>
                            </div>
                            @endif
                            @if (session()->has('message'))
                            <div class="text-center alert alert-light">
                                <h3 style="font-weight: bold;">{{ session('message') }}</h3>
                            </div>
                            @endif

                            <h6 class="text-capitalize detail-heading text-center">{{ $property->comments_count }} تعليقات</h6>
                            <div class="single__detail-features-review">

                                @foreach($property->comments as $comment)

                                @if($comment->parent_id == NULL)

                                <div class="media mt-4">
                                    <img class="mr-3 img-fluid rounded-circle" src="images/80x80.jpg" alt="">
                                    <div class="media-body">
                                        <h6 class="mt-0">{{ $comment->users->name }}</h6>
                                        <span class="mb-3">{{ $comment->created_at->diffForHumans() }}</span>
                                        <p>{{ $comment->body }}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                                <!-- COMMENT -->
                                <hr>
                                

                                
                                <!-- END COMMENT -->

                            </div>
                        </div>
                        <!-- END RATE US  WRITE -->
                    </div>
                </div>
                <!-- END DESCRIPTION -->
                <div class="row">
                    <div class="col-12 text-center">
                        @auth

                        <form action="{{ route('property.comment',$property->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="parent" value="0">

                        <div class="form-group">
                            <label class="text-center">التعليق</label>
                            <textarea name="body" class="form-control" rows="4"></textarea>
                            <p class="mb-2">قم بكتابة تعليق</p>

                        </div>

                        <button type="submit" class="btn btn-primary text-center "> إرسال <i
                                class="fa fa-paper-plane ml-2"></i></button>
                        </form>
                        @endauth

                @guest 
                <div class="text-center">
                    <a href="{{ route('login') }}">
                    <h6 class="text-bold" style="color:#000">سجل الدخول لترك تعليق</h6>
                    </a>
                </div>
                @endguest

            </div>
        </div>

            </div>
            <div class="col-lg-4">
                <div class="sticky-top">
                    <!-- PROFILE AGENT -->
                    <div class="profile__agent mb-30">
                        <div class="profile__agent__group">

                            <div class="profile__agent__header">
                                <div class="profile__agent__header-avatar">

                                    <ul class="list-unstyled mb-0 mx-auto">
                                        <li>
                                            <h5 class="text-capitalize">طلب العقار</h5>
                                        </li>
                                    </ul>


                                </div>

                            </div>
                            <div class="profile__agent__body" dir="rtl">
                                <form class="default-form agent-message-box" action="" method="POST">
                                    @csrf
                                    <input type="hidden" name="agent_id" value="{{ $property->user->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                    <input type="hidden" name="property_id" value="{{ $property->id }}">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="الإسم" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" placeholder="رقم الهاتف" required class="form-control">
                                    <small class="float-right mt-1 mb-1">فضلاً قم بكتابة الرقم باللغة الإنقليزية</small>
                                </div>
                                <div class="form-group mb-0">
                                    <textarea name="message" class="form-control required" rows="5" required="required"
                                        placeholder="تفاصيل إضافيه"></textarea>
                                </div>
                            </div>
                            <div class="profile__agent__footer">
                                <div class="form-group mb-0">
                                    <button id="msgsubmitbtn" type="submit" class="btn btn-primary text-capitalize btn-block"> إرسال <i
                                            class="fa fa-paper-plane ml-1"></i></button>
                                            <h4 class="text-center" id="result"></h4>

                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- END PROFILE AGENT -->

                </div>
            </div>
        </div>


    </div>
</section>



@endsection

@section('scripts')

    <script>
        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

    
          

            // MESSAGE
            $(document).on('submit','.agent-message-box',function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = "{{ route('property.message') }}";
                var btn = $('#msgsubmitbtn');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    beforeSend: function() {
                        $(btn).addClass('disabled');
                        $(btn).empty().append('جاري الإرسال..');
                    },
                    success: function(data) {
                        if (data.message) {
                        $('form.agent-message-box')[0].reset();
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('تم الإرسال');
                        }
                    },
                    error: function(xhr) {
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('إعادة الإرسال');
                    },
                    complete: function() {
                        $('form.agent-message-box')[0].reset();
                    },
                    dataType: 'json'
                });

            })
        })
    </script>
@endsection