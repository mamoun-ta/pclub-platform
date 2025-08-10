@extends('layouts.main')

@section('title', ' تسجيل دورة | منصة نادي البرمجة التعليمية')

@section('main')
    <div class="auth-wrapper d-flex bg-light py-5">
        <div class="col-md-4 m-auto">
            <div class="bg-white shadow-sm">
                <h1 class="border-bottom p-4">تسجيل دورة</h1>

                <div class="px-4 pt-4 text-right">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h5 class="mb-3 mt-3">بيانات مقدم الدورة</h5>
                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"/>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">رقم الجوال</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"/>
                            @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3 pb-4">
                            <label for="email" class="form-label">البريد الالكتروني</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"/>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <hr>
                        <h5 class="mb-3 mt-3">عنوان مقدم الدورة</h5>
                        <div class="mb-3 pt-4">
                            <label for="city" class="form-label">المدينة</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"/>
                            @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">الحي</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"/>
                            @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3 pb-4">
                            <label for="city" class="form-label">الشارع</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"/>
                            @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <hr>
                        <h5 class="mb-3 mt-3">بيانات الدورة</h5>
                        <div class="mb-3 pt-4">
                            <label for="city" class="form-label">اسم الدورة</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"/>
                            @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">مدة الدورة</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"/>
                            @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">الوصف</label>
                            <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
                        </div>

                        <div class="mt-4 d-grid pb-4">
                            <button type="reset" class="btn btn-block btn-primary" onclick="alert('تم الإرسال بنجاح')">تسجيل</button>

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