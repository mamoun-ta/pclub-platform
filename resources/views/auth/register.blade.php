@extends('layouts.main')

@section('title', ' إنشاء حساب | منصة نادي البرمجة التعليمية')

@section('main')
    <div class="auth-wrapper d-flex bg-light py-5">
        <div class="col-md-4 m-auto">
            <div class="bg-white shadow-sm">
                <h1 class="border-bottom p-4">إنشاء حساب</h1>

                <div class="px-4 pt-4 text-right">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"/>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="section" class="form-label">التخصص</label>
                            <input type="text" class="form-control @error('section') is-invalid @enderror" name="section" value="{{ old('section') }}"/>
                            @error('section') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
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
                        <div class="mb-3">
                            <label for="password" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" name="password_confirmation" />
                        </div>
                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-block btn-primary">تسجيل</button>
                            <div class="text-center py-4 text-muted">
                                هل لديك حساب ؟
                                <a href="{{ route('login') }}" class="text-muted font-weight-bold text-decoration-none">تسجيل الدخول</a>
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