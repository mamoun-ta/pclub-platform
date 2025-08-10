@extends('layouts.main')

@section('title', 'مسار Python | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        <div class="tracks-header">
            <img src="C:\Users\Mohamed\Desktop\EDU\python.png" alt="Python Track Background" class="tracks-bg">
            <h1 class="titel-page text-center"> مسار Python</h1>
        </div>

        <div class="container mt-5">
            <div class="track-section">
                <h2 class="section-title">
                    <i class="fa fa-video-camera"></i>
                    مقاطع الفيديو
                </h2>
                <div class="row">
                    <!-- Elzero Web School -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>Elzero Web School - Python Course</h3>
                            <div class="resource-meta">
                                <span class="level">مبتدئ</span>
                                <span class="language">AR</span>
                            </div>
                            <p class="resource-description">دورة شاملة لتعلم Python من الصفر مع أسامة الزيرو</p>
                            <a href="https://www.youtube.com/watch?v=mvZHDpCHphk&list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد الدورة
                            </a>
                        </div>
                    </div>

                    <!-- Bro Code Course -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>Python Crash Course - Bro Code</h3>
                            <div class="resource-meta">
                                <span class="level">مبتدئ</span>
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">دورة مكثفة لتعلم Python بشكل سريع وفعال</p>
                            <a href="https://youtu.be/ix9cRaBkVe0" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد الدورة
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
                            <h3>W3Schools Python Tutorial</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">دروس تفاعلية لتعلم Python مع أمثلة عملية</p>
                            <a href="https://www.w3schools.com/python/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-book"></i>
                                ابدأ القراءة
                            </a>
                        </div>
                    </div>

                    <!-- GeeksforGeeks -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>GeeksforGeeks Python Tutorial</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">مصدر شامل لتعلم Python مع شرح مفصل للمفاهيم البرمجية</p>
                            <a href="https://www.geeksforgeeks.org/python-programming-language-tutorial/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
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