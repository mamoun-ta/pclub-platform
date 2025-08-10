@extends('layouts.main')

@section('title', 'خطأ 403 | ممنوع')

@section('main')
    <div class="error-container">
        <h1>403</h1>
        <p>عذرًا، لا يُسمح لك بالوصول إلى هذه الصفحة.</p>
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