@extends('layouts.main')

@section('title', 'المسارات التعليمية | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        <div class="tracks-header">
            <img src="{{ asset('img/tracks/progress.jpg') }}" alt="Tracks Background" class="tracks-bg">
            <h1 class="titel-page text-center">المسارات التعليمية</h1>
        </div>

        <div class="container">
            <div class="row">
                <!-- Java Track -->
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tracks.java') }}" class="card-link">
                        <div class="card track-card">
                            <div class="card-image-wrapper">
                                <img src="{{ asset('img/tracks/java.png') }}" class="card-img-top" alt="Java Programming">
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title"  dir="rtl">مسار Java</h5>
                                <p class="card-text">تعلم لغة Java من الصفر للاحتراف مع أفضل المصادر العربية والإنجليزية</p>
                                <button class="btn btn-primary">ابدأ التعلم</button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Python Track -->
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tracks.python') }}" class="card-link">
                        <div class="card track-card">
                            <div class="card-image-wrapper">
                                <img src="{{ asset('img/tracks/python.png') }}" class="card-img-top" alt="Python Programming">
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">مسار Python</h5>
                                <p class="card-text">تعلم Python بشكل تفاعلي مع مجموعة من أفضل المصادر التعليمية</p>
                                <button class="btn btn-primary">ابدأ التعلم</button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- SQL Track -->
                <div class="col-md-4 mb-4">
                    <a href="{{ route('tracks.sql') }}" class="card-link">
                        <div class="card track-card">
                            <div class="card-image-wrapper">
                                <img src="{{ asset('img/tracks/sql.jpg') }}" class="card-img-top" alt="SQL Database">
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">مسار SQL</h5>
                                <p class="card-text">تعلم قواعد البيانات SQL من المستوى المبتدئ إلى المتقدم</p>
                                <button class="btn btn-primary">ابدأ التعلم</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/tracks.css') }}" rel="stylesheet">
@endsection