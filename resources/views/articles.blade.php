@extends('layouts.main')

@section('title', 'المقالات | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        <section class="container py-5">
            <h2 class="text-center section-title"> أحدث المقالات التقنية </h2>
            <div class="cards-container">
                <div class="card article-card">
                    <div class="card-body">
                        <h5 class="card-title">أعظم الأفكار في التكنولوجيا</h5>
                        <p class="card-text">نظرة على التطورات الحديثة في الذكاء الاصطناعي والحوسبة الكمومية وتأثيرها المستقبلي...</p>
                        <a href="https://medium.com/smart-minds/ai-quatum-computing-blockchain-5b126c3bb224" target="_blank" class="btn btn-primary btn-block"> قراءة المقال 🔗</a>
                    </div>
                </div>

                <div class="card article-card">
                    <div class="card-body">
                        <h5 class="card-title">دليل تطوير المواقع</h5>
                        <p class="card-text">كل ما تحتاجه لبدء رحلتك في تطوير الويب من الأساسيات إلى الاحتراف...</p>
                        <a href="https://bhonetwork.medium.com/دليل-شامل-لتعلم-تطوير-المواقع-الإلكترونية-من-الصفر-13f19bbea83b" target="_blank" class="btn btn-primary btn-block"> قراءة المقال 🔗</a>
                    </div>
                </div>

                <div class="card article-card">
                    <div class="card-body">
                        <h5 class="card-title">هل أنا مهندس برمجيات؟</h5>
                        <p class="card-text">تجربة شخصية حول متلازمة المنتحل والتحديات النفسية التي تواجه المطورين الجدد...</p>
                        <a href="https://medium.com/smart-minds/software-engineer-story-51a79a319713" target="_blank" class="btn btn-primary btn-block"> قراءة المقال 🔗</a>
                    </div>
                </div>

                <div class="card article-card">
                    <div class="card-body">
                        <h5 class="card-title">برمجة العقول </h5>
                        <p class="card-text">كيف يؤثر الذكاء الاصطناعي على مستقبل البرمجة والمهارات المطلوبة للجيل القادم...</p>
                        <a href="https://www.linkedin.com/pulse/برمجة-العقول-كيف-يخلق-الذكاء-الاصطناعي-جيلاً-جديدًا-من-المبرمجين" target="_blank" class="btn btn-primary btn-block"> قراءة المقال 🔗</a>
                    </div>
                </div>

                <div class="card article-card">
                    <div class="card-body">
                        <h5 class="card-title">لغات البرمجة المستقبلية</h5>
                        <p class="card-text">أهم لغات البرمجة الحديثة مثل Python و JavaScript وتأثيرها في مجال التكنولوجيا...</p>
                        <a href="https://www.linkedin.com/pulse/لغات-برمجة-جديدة-تشكل-مستقبل-التكنولوجيا-الرقمية" target="_blank" class="btn btn-primary btn-block"> قراءة المقال 🔗</a>
                    </div>
                </div>

                <div class="card article-card">
                    <div class="card-body">
                        <h5 class="card-title">إتقان تحديد المواقع في CSS</h5>
                        <p class="card-text">شرح لأهم قيم تحديد المواقع في CSS مع أمثلة عملية لمساعدتك على الإتقان...</p>
                        <a href="https://medium.com/@sami.hamdiapps/إتقان-5-قيم-مختلفة-لتحديد-المواقع-في-css-ea94602ef6d4" target="_blank" class="btn btn-primary btn-block"> قراءة المقال 🔗</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/articles.css') }}" rel="stylesheet">
@endsection