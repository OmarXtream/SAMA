@extends('frontend.layouts.app')
@section('content')

<div class="bg-theme-overlay">
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white">تسجيل جديد</h2>
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="{{route('home')}}" class="text-white">
                                الرئيسية
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                تسجيل حساب
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>




<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Login -->
                <div class="card mx-auto" style="max-width: 380px;">
                    <div class="card-body">
                        <h4 class="card-title mb-4 text-center">تسجيل حساب</h4>
                        <form method="POST" action="{{ route('register') }}" dir="rtl">
                            @csrf
                            <input type="hidden" name="agent" value="3" />


                            <div class="form-group">

                            <input type="text" id="name" type="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="الاسم">
                            @if ($errors->has('name'))
                            <span class="helper-text" data-error="wrong" data-success="right">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="البريد الإلكتروني">
                                @if ($errors->has('email'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required placeholder="كلمة المرور">
                                @if ($errors->has('password'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <input class="form-control" type="password" id="password_confirmation" type="password" name="password_confirmation" required placeholder="تأكيد كلمة المرور">

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> تسجيل </button>
                                <small class="form-text text-muted text-center">نحن لا نقوم بمشاركة بياناتك ابداً.</small>

                            </div> <!-- form-group// -->
                        </form>
                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->

                <p class="text-center mt-4">لديك حساب بالفعل ؟ <a href="{{route('login')}}">دخول الآن</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
