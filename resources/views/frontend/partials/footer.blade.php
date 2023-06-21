    <!-- CALL TO ACTION -->
    <section class="cta-v1 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2 class="text-uppercase text-white">هل تبحث عن منزل أحلامك؟</h2>

                </div>
                <div class="col-lg-3">
                    <a href="{{ route('PropertieRequest') }}" class="btn btn-light text-uppercase ">أطلبه الآن
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->

    <!-- Footer  -->
    <footer>
        <div class="wrapper__footer bg-theme-footer">
            <div class="container">
                <div class="row">
                    <!-- ADDRESS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <figure>
                                <img src="{{asset('frontend/images/logo.png')}}" alt="logo" class="logo-footer">
                            </figure>
                            <p>
                                سما هي شركة عقارية رائدة تهدف إلى تحقيق أحلام العملاء في الحصول على المنزل المثالي. تمتاز سما بالمهارة والخبرة الواسعة في صناعة العقارات، حيث تقدم خدمات متكاملة تشمل البيع والشراء والاستثمار وإدارة العقارات.
                          
                                <br>
                                رقم الترخيص: 555552222221
                            </p>


                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">القائمة</h4>
                            <div class="link__category-two-column">
                                <ul class="list-unstyled ">
                                    <li class="list-inline-item">
                                        <a href="{{ route('home') }}">الرئيسية</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ route('property') }}">العقارات</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ route('PropertieRequest') }}">طلب عقار</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ route('PropertiesMarkating') }}">تسويق عقار</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="{{ route('InfoForm') }}">حلول تمويلية</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ route('blog') }}">المدونة</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ route('contact') }}">تواصل معنا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">التواصل الإجتماعي </h4>
                            <p class="mb-2">
                                تابعنا ليصلك كل جديد
                            </p>
                            <p>
                                <button class="btn btn-social btn-social-o facebook mr-1">
                                    <i class="fa fa-facebook-f"></i>
                                </button>
                                <button class="btn btn-social btn-social-o twitter mr-1">
                                    <i class="fa fa-twitter"></i>
                                </button>

                                <button class="btn btn-social btn-social-o linkedin mr-1">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                                <button class="btn btn-social btn-social-o instagram mr-1">
                                    <i class="fa fa-instagram"></i>
                                </button>

                                <button class="btn btn-social btn-social-o youtube mr-1">
                                    <i class="fa fa-youtube"></i>
                                </button>
                            </p>

                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="bg__footer-bottom-v1">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-12">
                        <span>
                            © 2023 SAMA Real Estate ,  Developed by
                            <a href="https://puzzle-sa.com">Puzzle</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer  -->
    </footer>
