@extends('layouts.main')

@section('title', 'تسجيل الدخول | منصة نادي البرمجة التعليمية')

@section('main')
    <div class="auth-wrapper d-flex bg-light" dir="rtl">
        <div class="col-md-4 m-auto">
            <div class="bg-white shadow-sm">
                <h1 class="border-bottom p-4">تسجيل الدخول</h1>

                <div class="px-4 pt-4 text-right">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الالكتروني</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"/>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" />
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" value="true" id="customCheck1">
                                <label class="custom-control-label text-black-50" for="customCheck1">تذكرني</label>
                            </div>
                            <a href="{{ route('password.request') }}">هل نسيت كلمة المرور ؟</a>
                        </div>

                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-block btn-primary">تسجيل الدخول</button>
                            <div class="text-center py-4 text-muted">
                                لا تملك حساب ؟ 
                                <a href="{{ route('register') }}" class="text-muted font-weight-bold text-decoration-none">إنشاء حساب</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/auth.css') }}" rel="stylesheet">
@endsection