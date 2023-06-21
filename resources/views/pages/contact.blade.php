@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

        <div class="bg-theme-overlay">
            <section class="section__breadcrumb ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-capitalize text-white">تواصل معنا</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="{{route('home')}}" class="text-white">
                                        الرئيسية
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-white">
                                        تواصل معنا
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
                    <div class="col-md-8" dir="rtl">
                        <h5 class="text-center">تواصل معنا</h5>
                        <form id="contact-us" action="" method="POST">
                            @csrf
                            @auth
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            @endauth

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-name">
                                    <label class="float-right">الإسم <span class="required"></span></label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="الإسم" @auth value="{{ auth()->user()->name }}" readonly @endauth required>
    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-group-name">
                                    <label class="float-right">البريد الإلكتروني <span class="required"></span></label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="البريد الإلكتروني"  @auth value="{{ auth()->user()->email }}" readonly @endauth required>
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group form-group-name">
                                    <label class="float-right">رقم الهاتف <span class="required"></span></label>
                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="رقم الهاتف" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="float-right">الرسالة </label>
                                    <textarea class="form-control" rows="9" name="message" id="message"></textarea>
                                </div>
                                <div class="form-group float-right mb-0">
                                    <button type="submit" id="msgsubmitbtn" class="btn btn-primary btn-contact">إرسال</button>
                                </div>
                                <h1 class="text-center" id="result"></h1>

                                <p class="form-messege mb-0 mt-20"></p>

                            </form>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-md-4">
                        <h5>معلومات التواصل</h5>
                        <div class="wrap__contact-form-office">
                            <ul class="list-unstyled">
                                <li>
                                    <span>
                                        <i class="fa fa-home"></i>
                                    </span>
    
                                    الحي الفلاني - الشارع الفلاني
    
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:">+966 5555 555 555</a>
                                    </span>
    
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:">mail@sama.com</a>
                                    </span>
    
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-globe"></i>
                                        <a href="#" target="_blank"> www.sama-sa.com</a>
                                    </span>
                                </li>
                            </ul>
    
                            <div class="social__media">
                                <h5>حسابات التواصل الاجتماعي</h5>
                                <ul class="list-inline">
    
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white whatsapp">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white telegram">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

@endsection

@section('scripts')
    <script>

        $(function(){
            $(document).on('submit','#contact-us',function(e){
                e.preventDefault();

                var data = $(this).serialize();
                var url = "{{ route('contact.message') }}";
                var btn = $('#msgsubmitbtn');
                
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    beforeSend: function() {
                        $(btn).addClass('disabled');
                        $(btn).empty().append('جاري الإرسال');
                    },
                    success: function(data) {
                        if (data.message) {
                            $('#result').empty().append(data.message);
                        }
                    },
                    error: function(xhr) {
                        M.toast({html: 'ERROR: Failed to send message!', classes: 'red darken-4'})
                    },
                    complete: function() {
                        $('form#contact-us')[0].reset();
                        $(btn).removeClass('disabled');
                        $(btn).empty().append('إرسال');
                    },
                    dataType: 'json'
                });

            })
        })

    </script>
@endsection