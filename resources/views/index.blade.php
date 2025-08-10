@extends('layouts.main')

@section('title', 'منصة نادي البرمجة التعليمية')

@section('main')
    <main class="pb-5">
        <section class="hero" style="background: url('{{ asset('img/background.jpg') }}') ;">
            <div class="hero-section">
                <div class="content">
                    <h1> رحلة تعلم مبتكرة تبدأ من هنا    </h1>
                    <p>مسارات تعليمية متكاملة في البرمجة والتقنية، مع دروس منظمة، موارد متخصصة، وميزات تفاعلية لمتابعة تقدمك</p>
                    @guest
                        <div>
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg m-2">تسجيل الدخول</a>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg m-2">إنشاء حساب</a>
                        </div>
                    @else
                        <button id="start-button"> انطلق في رحلتك التقنية معنا </button>
                    @endguest
                </div>
            </div>
        </section>

        <section class="white-separator"></section>
        <section id="explore-platform" class="explore-platform">
            <div class="explore-content">
                <section class="features">
                    <div class="features-section">
                        <h4>استكشف المنصة</h4>
                        <div class="qualities">
                            <div class="card">
                                <div class="card__content">
                                    <i class="fas fa-route"></i>
                                    <h3>المسارات</h3>
                                    <p class="para">مجموعة من المسارات التعليمية التي تشمل دورات متخصصة، وكل دورة تتكون من دروس تفاعلية تساعدك على تعلم البرمجة والتقنيات الحديثة خطوة بخطوة.</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__content">
                                    <i class="fas fa-map"></i>
                                    <h3>خرائط الطريق</h3>
                                    <p class="para">دليلك لاختيار التخصص المناسب، مثل تطوير الويب أو تطبيقات الجوال. كل تخصص يحتوي على خريطة طريق تفصيلية، إما نصية أو مرئية، توضح الخطوات التي تحتاجها للتعلم.</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__content">
                                    <i class="fas fa-newspaper"></i>
                                    <h3>المقالات</h3>
                                    <p class="para">مجموعة من المقالات التقنية المتخصصة، تتضمن معلومات عن الكاتب وتاريخ النشر، بالإضافة إلى روابط لمصادر خارجية موثوقة لتعزيز المحتوى المعرفي.</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__content">
                                    <i class="fas fa-code"></i>
                                    <h3>البرمجة التنافسية</h3>
                                    <p class="para">تحديات برمجية وروابط لمسائل تدريبية تساعدك على تحسين مهاراتك في حل المشكلات والخوارزميات.</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__content">
                                    <i class="fas fa-podcast"></i>
                                    <h3>البودكاست</h3>
                                    <p class="para">مكتبة صوتية ومرئية لمقاطع البودكاست حول البرمجة والتقنية، مع عرض عناوين الحلقات وروابط الاستماع.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="white-separator"></section>
        <section class="featured-offers pb-5">
            <div class="offers-section">
                <h4>أشهر الدورات في المنصة</h4>
                <div class="offers">
                    <div class="card">
                        <div class="card-details">
                            <i class="fab fa-java"></i>
                            <p class="text-title">مسار تعلم Java</p>
                            <p class="text-body">كورس مسار تعلم جافا في منصة سطر يتيح لك اكتساب مهارات البرمجة الأساسية والمتقدمة بلغة جافا</p>
                        </div>
                        <button class="card-button" id="" onclick="window.location.href='{{ route('tracks.java') }}'">اكتشف المزيد</button>
                    </div>
                    <div class="card">
                        <div class="card-details">
                            <i class="fas fa-database"></i>
                            <p class="text-title">مسار تعلم SQL </p>
                            <p class="text-body">تعلم استعلامات SQL وكيفية التعامل مع قواعد البيانات بشكل عملي.</p>
                        </div>
                        <button class="card-button" onclick="window.location.href='{{ route('tracks.sql') }}'">اكتشف المزيد</button>
                    </div>
                    <div class="card">
                        <div class="card-details">
                            <i class="fab fa-python"></i>
                            <p class="text-title">مسار تعلم Python </p>
                            <p class="text-body">كورس مسار تعلم بايثون هو فرصة لك لتعلم البرمجة باستخدام لغة بايثون بشكل عملي</p>
                        </div>
                        <button class="card-button" onclick="window.location.href='{{ route('tracks.python') }}'">اكتشف المزيد</button>
                    </div>
                </div>
            </div>
        </section> 

    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
@endsection