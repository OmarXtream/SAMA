@extends('frontend.layouts.app')

@section('content')

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
                                {{$post->title}}
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="clearfix"></div>




<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single__blog-detail">
                    <h1>
                        {{$post->title}}
                    </h1>

                    <div class="single__blog-detail-info">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    {{$post->user->name}}
                                </a>
                                <span>
                                    الكاتب
                                </span>

                            </li>
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize ml-1">
                                    {{$post->created_at->diffForHumans()}}
                                </span>
                            </li>

                        </ul>
                    </div>
                    <figure>
                        <img src="{{Storage::url('posts/'.$post->image)}}" alt="{{$post->title}}" class="img-fluid" >
                    </figure>

                    {!! $post->body !!}



                    <!-- TAGS -->
                    <div class="blog__tags mb-4">
                        <ul class="list-inline">

                            @foreach($post->categories as $key => $category)

                            <li class="list-inline-item">
                                <a href="#">
                                    #{{$category->name}}
                                </a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    <!-- END TAGS -->



                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- WIDGET BLOG -->
            <div class="col-lg-4">
                <div class="sticky-top">
                    <aside>
                        <div class="widget__sidebar">
                            <div class="widget__sidebar__header">
                                <h6 class="text-capitalize">الهاشتاق</h6>
                            </div>
                            <div class="widget__sidebar__body">
                                <div class="blog__tags p-0">
                                    <ul class="list-inline">

                                        @foreach($post->categories as $key => $category)

                                        <li class="list-inline-item">
                                            <a href="#">
                                                #{{$category->name}}
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- END WIDGET BLOG -->
    </div>
</section>


@endsection

