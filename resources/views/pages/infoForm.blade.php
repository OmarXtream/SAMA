@extends('frontend.layouts.app')

@section('content')
<div class="bg-theme-overlay">
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white">طلب تمويلي</h2>
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="{{route('home')}}" class="text-white">
                                الرئيسية
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                حلول تمويلية
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
                        <form action="{{route('InfoForm.create')}}" method="POST">
                            @csrf
    
                        <div class="col-md-12">
                            <h5 class="text-center">طلب تمويلي</h5>
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
                                        <label class="float-right">العمر <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('Age')) is-invalid @endif" id="Age" name="Age" type="number" value="{{ old('Age') }}" placeholder="* العمر">
                                        @if ($errors->has('Age'))
                                        <span class="text-danger">{{ $errors->first('Age') }}</span>
                                        @endif   
                    
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">قطاع الوظيفة </label>
                                        <select name="type" class="wide select_option @if ($errors->has('type')) is-invalid @endif">
                                            <option value="" disabled selected>* قطاع الوظيفة</option>
                                            <option value="1">قطاع عسكري</option>
                                            <option value="2">قطاع مدني</option>
                                            <option value="3">قطاع خاص</option>
                                        </select>
                                        @if ($errors->has('type'))
                                        <span class="text-danger">{{ $errors->first('type') }}</span>
                                        @endif                
                                    </div>
                                </div>

                
                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">الإلتزامات الشهرية <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('commitments')) is-invalid @endif" id="commitments" name="commitments" type="text" value="{{ old('commitments') }}" placeholder="الإلتزامات الشهرية">
                                        @if ($errors->has('commitments'))
                                        <span class="text-danger">{{ $errors->first('commitments') }}</span>
                                        @endif
                                                
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">البنك <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('bank')) is-invalid @endif" id="bank" name="bank" type="text" value="{{ old('bank') }}" placeholder="البنك">
                                        @if ($errors->has('bank'))
                                        <span class="text-danger">{{ $errors->first('bank') }}</span>
                                        @endif
                                                
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">الراتب الاساسي <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('salary')) is-invalid @endif" id="salary" name="salary" type="text" value="{{ old('salary') }}" placeholder="الراتب الاساسي">
                                        @if ($errors->has('salary'))
                                        <span class="text-danger">{{ $errors->first('salary') }}</span>
                                        @endif
                                                
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">الراتب الصافي <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('salaryTotal')) is-invalid @endif" id="salaryTotal" name="salaryTotal" type="text" value="{{ old('salaryTotal') }}" placeholder="الراتب الصافي">
                                        @if ($errors->has('salaryTotal'))
                                        <span class="text-danger">{{ $errors->first('salaryTotal') }}</span>
                                        @endif
                                                
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">بدل السكن <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('homeAllowance')) is-invalid @endif" id="homeAllowance" name="homeAllowance" type="text" value="{{ old('homeAllowance') }}" placeholder="بدل السكن">
                                        @if ($errors->has('homeAllowance'))
                                        <span class="text-danger">{{ $errors->first('homeAllowance') }}</span>
                                        @endif
                                                
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">بدلات اخرى <span class="required"></span></label>
                                        <input class="form-control @if ($errors->has('Allowances')) is-invalid @endif" id="Allowances" name="Allowances" type="text" value="{{ old('Allowances') }}" placeholder="بدلات اخرى">
                                        @if ($errors->has('Allowances'))
                                        <span class="text-danger">{{ $errors->first('Allowances') }}</span>
                                        @endif
                                                
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group form-group-name">
                                        <label class="float-right">دعم سكني </label>
                                        <select name="supported" class="wide select_option @if ($errors->has('supported')) is-invalid @endif">
                                            <option value="" disabled selected>* مدعوم من سكني؟</option>
                                            <option value="1">لا</option>
                                            <option value="2">نعم</option>
                                        </select>
                                        @if ($errors->has('supported'))
                                        <span class="text-danger">{{ $errors->first('supported') }}</span>
                                        @endif                
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
