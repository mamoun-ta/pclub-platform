@extends('layouts.main')

@section('title', 'الملف الشخصي | منصة نادي البرمجة التعليمية')

@section('main')
    <main class="py-5 text-right" dir="rtl">
        <div class="container">
            <div class="row">
                @include('settings._side')

                <div class="col-md-9">
                    <form action="{{ route('user-password.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-title">
                                <strong>تحديث كلمة المرور</strong>
                            </div>
                            <div class="card-body">
                                @if (session('status') == 'password-updated')
                                    <div class="alert alert-success">تم تحديث كلمة المرور</div>
                                @endif
                                <div class="form-group row">
                                    <label for="current-password" class="col-md-4 col-form-label">كلمة المرور القديمة</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" id="current-password">
                                        @error('current_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label">كلمة المرور الجديدة</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirmation" class="col-md-4 col-form-label">تأكيد كلمة المرور</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password-confirmation">
                                    </div>
                                </div>
                                <div class="form-group row border-top pt-3 mb-0">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-success">تحديث</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection