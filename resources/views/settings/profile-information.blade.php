@extends('layouts.main')

@section('title', 'الملف الشخصي | منصة نادي البرمجة التعليمية')

@section('main')
    <main class="py-5 text-right" dir="rtl">
        <div class="container">
            <div class="row">
                @include('settings._side')

                <div class="col-md-9">
                    <form action="{{ route('user-profile-information.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-title">
                                <strong>تعديل الملف الشخصي</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        @if (session('status') == 'profile-information-updated')
                                            <div class="alert alert-success">تم تحديث الملف الشحصي</div>
                                        @endif
                                        <div class="form-group">
                                            <label for="name">الاسم</label>
                                            <input type="text" name="name" value="{{ old('name', $user->name) }}" id="name" class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">البريد الالكتروني</label>
                                            <input type="email" name="email" value="{{ old('email', $user->email) }}" id="email" class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="section">التخصص</label>
                                            <input type="text" name="section" value="{{ old('section', $user->section) }}" id="section" class="form-control @error('section') is-invalid @enderror">
                                            @error('section')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-6">
                                                <button type="submit" class="btn btn-success">تحديث</button>
                                            </div>
                                        </div>
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