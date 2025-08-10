@extends('layouts.main')

@section('title', 'خطأ 400 | طلب غير صالح')

@section('main')
    <div class="error-container">
        <h1>400</h1>
        <p>عذرًا، الطلب المرسل غير صالح.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">العودة إلى الصفحة الرئيسية</a>
    </div>
@endsection

@section('styles')
    <style>
        .error-container {
            text-align: center;
            margin-top: 10%;
            margin-bottom: 15%;
        }
        .error-container h1 {
            font-size: 6rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        .error-container p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
    </style>
@endsection