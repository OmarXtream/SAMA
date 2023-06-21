@extends('frontend.layouts.app')


@section('content')

 <!-- BREADCRUMB AREA START -->
        <div class="bg-theme-overlay">
            <section class="section__breadcrumb ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-capitalize text-white">المدونة</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="{{route('home')}}" class="text-white">
                                        الرئيسية
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-white">
                                        منشورات المدونة
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<!-- BREADCRUMB AREA END -->
<div class="clearfix"></div>



    <!-- BLOG -->
    <section>
        <div class="container">
            <div class="row">
                <!-- BLOG START -->
                <div class="col-lg-12">
                    <div class="row">
                        @forelse($posts as $post)

                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <a href="{{ route('blog.show',$post->slug) }}"><img src="{{Storage::url('posts/'.$post->image)}}" alt="{{$post->title}}"
                                            class="img-fluid w100 img-transition"> </a>
                                        <div class="info"> جديد</div>
                                    </div>
                                    <div class="card__image-body">
                                         <span class="badge badge-secondary p-1 text-capitalize mb-3">{{$post->created_at->diffForHumans()}}
                                        </span> 
                                        <h6 class="text-capitalize">
                                            {{$post->title}}
                                        </h6>
                                        <p class=" mb-0">

                                            {!! str_limit($post->body,120) !!}
                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="{{ route('blog.show',$post->slug) }}" class="btn btn-sm btn-primary "><small
                                                        class="text-white ">تفاصيل اكثر <i
                                                            class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>

                        @empty
                        <h1 class="text-center mb-5">لا يوجد اي منشورات حالياً</h1>
                        @endforelse
            
                    </div>
                </div>
                <!-- END BLOG  -->

            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->


@endsection
