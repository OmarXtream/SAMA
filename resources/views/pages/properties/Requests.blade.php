@extends('frontend.layouts.app')

@section('content')
<div class="bg-theme-overlay">
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white">طلب عقار</h2>
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="{{route('home')}}" class="text-white">
                                الرئيسية
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                طلب عقار
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="clearfix"></div>


<section class="wrap__contact-form">
    <div class="container">
        <div class="row">
            @if(Session::has('errors'))
            <div class="text-center mx-auto alert alert-light">
                <h5 style="font-weight: bold;">* فضلاً قم بملىء كل الحقول</h5>
            @if($errors->any())
            {!! implode('', $errors->all('<p style="color:red">:message</p>')) !!}
            @endif
            </div>
            @endif
            @if (session()->has('message'))
            <div class="text-center mx-auto alert alert-light">
                <h3 style="font-weight: bold; color:black">{{ session('message') }}</h3>
            </div>
            @endif
        

            <section class="wrap__contact-form" dir="rtl">
                <div class="container">
                    <div class="row">
                        <form action="{{route('PropertieRequest.create')}}" method="POST">
                            @csrf
    
                        <div class="col-md-12">
                            <h5 class="text-center">طلب عقار</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">الاسم الكامل <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('name')) is-invalid @endif" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="* الإسم">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif                  
                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">البريد الإلكتروني <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="* البريد الإلكتروني" required>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                    
                                    </div>
                                </div>
        
                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">رقم الهاتف <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('phone')) is-invalid @endif" id="phone" name="phone" type="text" value="{{ old('phone') }}" placeholder="*  رقم الهاتف">
                                        @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif   
                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">نوع العقار <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('type')) is-invalid @endif" id="type" name="type" type="text" value="{{ old('type') }}" placeholder="نوع العقار">
                                        @if ($errors->has('type'))
                                        <span class="text-danger">{{ $errors->first('type') }}</span>
                                        @endif                                        
                            
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">المدينة <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('city')) is-invalid @endif" id="city" name="city" type="text" value="{{ old('city') }}" placeholder="مدينة العقار">
                                        @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                                
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="float-right">عدد الغرف <span class="required"></span></label>
                                    <div class="form-group form-group-name">
                                        <input class="mb-3 form-control @if ($errors->has('rooms')) is-invalid @endif" id="rooms" name="rooms" type="number" value="{{ old('rooms') }}" placeholder="عدد الغرف">
                                        @if ($errors->has('rooms'))
                                        <span class="text-danger">{{ $errors->first('rooms') }}</span>
                                        @endif                                        
                                                                    
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="float-right">عدد دورات المياه <span class="required"></span></label>
                                    <div class="form-group form-group-name">
                                        <input class="mb-3 form-control @if ($errors->has('baths')) is-invalid @endif" id="baths" name="baths" type="number" value="{{ old('baths') }}" placeholder="دورات المياه">
                                        @if ($errors->has('baths'))
                                        <span class="text-danger">{{ $errors->first('baths') }}</span>
                                        @endif                                        
                                                                                        
                                    </div>
                                </div>

                                
                                <div class="col-md-3">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">اقل سعر للعقار <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('min_price')) is-invalid @endif" id="min_price" name="min_price" type="text" value="{{ old('min_price') }}" placeholder="أقل قيمة للعقار">
                                        @if ($errors->has('min_price'))
                                        <span class="text-danger">{{ $errors->first('min_price') }}</span>
                                        @endif
                                                                                                                                
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">اعلى سعر للعقار <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('max_price')) is-invalid @endif" id="max_price" name="max_price" type="text" value="{{ old('max_price') }}" placeholder="أعلى قيمة للعقار">
                                        @if ($errors->has('max_price'))
                                        <span class="text-danger">{{ $errors->first('max_price') }}</span>
                                        @endif
                                                                                                            
                                    </div>
                                </div>
                                <hr>   <br>


                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <input class="form-control" id="first_district" name="first_district" type="text" value="{{ old('first_district') }}" placeholder="الحي الاول">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <input class="form-control" id="Second_district" name="Second_district" type="text" value="{{ old('Second_district') }}" placeholder="الحي الثاني">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <input class="form-control" id="Third_district" name="Third_district" type="text" value="{{ old('Third_district') }}" placeholder="الحي الثالث">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <input class="form-control" id="Fourth_district" name="Fourth_district" type="text" value="{{ old('Fourth_district') }}" placeholder="الحي الرابع">
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="float-right">تفاصيل إضافيه </label>
                                        <textarea id="details" name="details"  placeholder="تفاصيل إضافيه" class="form-control" rows="9">{{ old('details') }}</textarea>
                                    </div>
                                    <div class="form-group float-right mb-0">
                                        <button type="submit" class="btn btn-primary btn-contact">إرسال</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>




@endsection
