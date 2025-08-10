@extends('layouts.main')

@section('title', 'الدعم الفني | منصة نادي البرمجة التعليمية')

@section('main')
    <main class="container py-5" >
        <h2 class="text-center">الدعم الفني</h2>
        <p class="text-center">نحن هنا لمساعدتك! يرجى ملء النموذج أدناه وسنقوم بالرد عليك في أقرب وقت ممكن.</p>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form dir="rtl" class="text-right" action="{{ route('support.store') }}" method="POST">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="mb-3">
                        <label for="full_name" class="form-label"><i class="fa-solid fa-user-tie"></i> الاسم الكامل</label>
                        <input type="text" name="full_name" class="form-control" id="full_name" placeholder="أدخل اسمك بالكامل" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="fa-solid fa-envelope-open-text"></i> البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label"><i class="fa-solid fa-mobile-screen-button"></i> رقم الجوال</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="9665XXXXXXXX" dir="rtl" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label"><i class="fa-solid fa-comment-dots"></i> الموضوع</label>
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="أدخل موضوع استفسارك" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label"><i class="fa-solid fa-pen-to-square"></i> الرسالة</label>
                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="اكتب رسالتك بالتفصيل" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 support-send"><i class="fa-solid fa-paper-plane"></i> إرسال الرسالة</button>
                </form>
            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/support.css') }}" rel="stylesheet">
@endsection