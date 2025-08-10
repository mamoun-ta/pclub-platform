@extends('layouts.main')

@section('title', 'الدعم الفني | منصة نادي البرمجة التعليمية')

@section('main')
    <div class="support-container">
        <h2> تم إرسال رسالتك بنجاح! 🎉</h2>
        <p>سنقوم بمراجعة استفسارك والرد عليك قريبًا.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">العودة إلى الصفحة الرئيسية</a>
    </div>
@endsection

@section('styles')
    <style>
        .support-container {
            text-align: center;
            margin-top: 10%;
            margin-bottom: 15%;
        }
        .support-container h1 {
            font-size: 6rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        .support-container p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
    </style>
@endsection