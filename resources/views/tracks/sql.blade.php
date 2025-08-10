@extends('layouts.main')

@section('title', 'مسار SQL | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        <div class="tracks-header">
            <img src="C:\Users\Mohamed\Desktop\EDU\sql.jpg" alt="SQL Track Background" class="tracks-bg">
            <h1 class="titel-page text-center"> مسار SQL</h1>
        </div>

        <div class="container mt-5">
            <div class="track-section">
                <h2 class="section-title">
                    <i class="fa fa-video-camera"></i>
                    مقاطع الفيديو
                </h2>
                <div class="row">
                    <!-- Satr SQL 101 -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>SQL 101 - منصة سطر</h3>
                            <div class="resource-meta">
                                <span class="level">مبتدئ</span>
                                <span class="language">AR</span>
                            </div>
                            <p class="resource-description">دورة أساسية في SQL لتعلم المفاهيم الأساسية</p>
                            <a href="https://satr.codes/course/FtkmhtJpQW/view" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد الدورة
                            </a>
                        </div>
                    </div>

                    <!-- Satr SQL 102 -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>SQL 102 - منصة سطر</h3>
                            <div class="resource-meta">
                                <span class="level">متوسط</span>
                                <span class="language">AR</span>
                            </div>
                            <p class="resource-description">دورة متقدمة في SQL لتعميق المفاهيم</p>
                            <a href="https://satr.codes/course/APjgdQqVWR/view" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد الدورة
                            </a>
                        </div>
                    </div>

                    <!-- Satr SQL 103 -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>SQL 103 - منصة سطر</h3>
                            <div class="resource-meta">
                                <span class="level">متقدم</span>
                                <span class="language">AR</span>
                            </div>
                            <p class="resource-description">دورة احترافية في SQL للمستوى المتقدم</p>
                            <a href="https://satr.codes/course/bOXiOFzkMv/view" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد الدورة
                            </a>
                        </div>
                    </div>

                    <!-- Edureka SQL -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>Edureka! SQL Tutorial</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">سلسلة تعليمية شاملة في SQL باللغة الإنجليزية</p>
                            <a href="https://www.youtube.com/watch?v=q_JsgpiuY98&list=PL9ooVrP1hQOG6DQnOD6ujdCEchaqADfCU" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-play-circle"></i>
                                شاهد السلسلة
                            </a>
                        </div>
                    </div>

                    <!-- freeCodeCamp SQL -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>freeCodeCamp SQL Course</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">دورة مكثفة في SQL من freeCodeCamp</p>
                            <a href="https://youtu.be/HXV3zeQKqGY" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
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
                            <h3>W3Schools SQL Tutorial</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">دروس تفاعلية لتعلم SQL مع أمثلة عملية</p>
                            <a href="https://www.w3schools.com/sql/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-book"></i>
                                ابدأ القراءة
                            </a>
                        </div>
                    </div>

                    <!-- GeeksforGeeks -->
                    <div class="col-md-6 mb-4">
                        <div class="resource-card">
                            <h3>GeeksforGeeks SQL Tutorial</h3>
                            <div class="resource-meta">
                                <span class="language">EN</span>
                            </div>
                            <p class="resource-description">مصدر شامل لتعلم SQL مع شرح تفصيلي للمفاهيم</p>
                            <a href="https://www.geeksforgeeks.org/sql-tutorial/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
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