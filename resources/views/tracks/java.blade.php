@extends('layouts.main')

@section('title', 'مسار Java | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        <div class="tracks-header">
            <img src="C:\Users\Mohamed\Desktop\EDU\java-logo-png-transparent.png" alt="Java Track Background" class="tracks-bg">
            <h1 class="titel-page text-center"> مسار Java</h1>
        </div>

        <div class="container mt-5">
            <div class="track-section">
                <h2 class="section-title">
                    <i class="fa fa-video-camera"></i>
                    مقاطع الفيديو
                </h2>
                <div class="row">
                    <!-- Satr Course -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>مسار تعلم Java منصة سطر</h3>
                            <div class="resource-meta">
                                <span class="level">مبتدئ</span>
                                <span class="language">AR</span>
                            </div>
                            <p class="resource-description">دورة شاملة لتعلم أساسيات Java على منصة سطر</p>
                            <a href="https://satr.codes/path/rcqQIkvMEE/view" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد الدورة
                            </a>
                        </div>
                    </div>

                    <!-- Java Crash Course -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>Java Crash Course - Bro Code</h3>
                            <div class="resource-meta">
                                <span class="level">مبتدئ</span>
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">دورة مكثفة لتعلم Java بشكل سريع</p>
                            <a href="https://youtu.be/xTtL8E4LzTQ" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد الدورة
                            </a>
                        </div>
                    </div>

                    <!-- Mohamed Eldesoky Course -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>Java - محمد الدسوقي</h3>
                            <div class="resource-meta">
                                <span class="level">مبتدئ</span>
                                <span class="language">AR</span>
                            </div>
                            <p class="resource-description">سلسلة تعليمية شاملة للغة Java باللغة العربية</p>
                            <a href="https://www.youtube.com/watch?v=FbviMTJ_vP8&list=PL1DUmTEdeA6K7rdxKiWJq6JIxTvHalY8f" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد السلسلة
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="track-section mt-5">
                <h2 class="section-title">
                    <i class="fa fa-book"></i>
                    مصادر تفاعلية للقراءة
                </h2>
                <div class="row">
                    <!-- W3Schools -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>W3Schools Java Tutorial</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">دروس تفاعلية لتعلم Java مع أمثلة عملية</p>
                            <a href="https://www.w3schools.com/java/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-book"></i>
                                ابدأ القراءة
                            </a>
                        </div>
                    </div>

                    <!-- GeeksforGeeks -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>GeeksforGeeks Java Tutorial</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">مصدر شامل لتعلم Java مع شرح مفصل للمفاهيم</p>
                            <a href="https://www.geeksforgeeks.org/java/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-book"></i>
                                ابدأ القراءة
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/tracks.css') }}" rel="stylesheet">
@endsection