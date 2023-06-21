@extends('frontend.layouts.app')
@section('content')

<div class="bg-theme-overlay">
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white">دخول</h2>
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="{{route('home')}}" class="text-white">
                                الرئيسية
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                تسجيل الدخول
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
                        <h4 class="card-title mb-4 text-center">تسجيل الدخول</h4>
                        <form method="POST" action="{{ route('login') }}" dir="rtl">
                            @csrf
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
                                <button type="submit" class="btn btn-primary btn-block"> دخول </button>
                            </div> <!-- form-group// -->
                        </form>
                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->

                <p class="text-center mt-4">ليس لديك حساب ؟ <a href="{{route('register')}}">سجل الآن</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
