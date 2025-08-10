@extends('layouts.main')

@section('title', 'البودكاست | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        <div class="podcast-header">
            <img src="{{ asset('img/background-podcast.jpg') }}" alt="Podcast Background" class="podcast-bg">
            <h1 class="titel-page text-center">البودكاست</h1>
        </div>

        <div class="container">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <a href="https://www.youtube.com/watch?v=jmKK6sNzh4k" class="card-link" target="_blank" rel="noopener noreferrer">
                        <div class="card podcast-card">
                            <div class="card-image-wrapper">
                                <img src="{{ asset('img/podcast.png') }}" class="card-img-top" alt="خفايا البرمجة">
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">خفايا لا تعرفها عن البرمجة والحاسب</h5>
                                <p class="card-text">البروفيسور محمد يتحدث عن أهمية البرمجة والفرق بين تخصصات الحاسب</p>
                                <button class="btn btn-primary">استمع الآن</button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <a href="https://youtu.be/a5gx5i82S40" class="card-link" target="_blank" rel="noopener noreferrer">
                        <div class="card podcast-card">
                            <div class="card-image-wrapper">
                                <img src="{{ asset('img/podcast.png') }}" class="card-img-top" alt="بودكاست أسامة">
                                <div class="card-overlay"></div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">بودكاست | أسامة الزيرو والبرمجة</h5>
                                <p class="card-text">رحلة أسامة في تعلم البرمجة وتطوير المواقع، ونصائح حول احتراف البرمجة</p>
                                <button class="btn btn-primary">استمع الآن</button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Add cards here -->

            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/podcast.css') }}" rel="stylesheet">
@endsection