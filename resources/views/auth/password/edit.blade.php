@extends('layouts.main')

@section('title', 'تحديث كلمة المرور | منصة نادي البرمجة التعليمية')

@section('main')
    <div class="auth-wrapper d-flex bg-light">
        <div class="col-md-4 m-auto">
            <div class="bg-white shadow-sm">
                <h1 class="border-bottom p-4">تحديث كلمة المرور</h1>

                <div class="px-4 pt-4">
                    <form action="{{ route('password.update') }}" method="POST" class="text-right">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الالكتروني</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ request()->email }}"/>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">كلمة المرور </label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" />
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" name="password_confirmation" />
                            <input type="hidden" name="token" value="{{ request()->route('token') }}" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-block btn-primary">تحديث </button>
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