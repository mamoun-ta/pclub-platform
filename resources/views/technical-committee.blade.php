@extends('layouts.main')

@section('title', 'اللجنة التقنية | منصة نادي البرمجة التعليمية')

@section('main')
    <main class="py-5 row" id="technical-committee">
        <div class="container bg-white rounded p-4 text-right">
            <div class="content text-center">
                <h1>فريق تطوير المنصة التعليمية</h1>
                <p>اللجنة التقنية بنادي البرمجة</p>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <h5>إشراف</h5>
                </div>
                <div class="col-lg-4 order-lg-1 order-2">
                    <ul>
                        <li>محمد كمال سبع</li>
                    </ul>
                </div>
                <div class="col-lg-4 order-lg-2 order-1">
                    <ul>
                        <li>مأمون تركي طبق</li>
                    </ul>
                </div>
                <div class="col-lg-4 order-lg-3 order-3">
                    <ul>
                        <li>أسامة عبد العزيز</li>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 order-3 order-lg-1">
                    <h5>كتابة المحتوى</h5>
                    <ul>
                        
                        <li>طيف العنزي</li>
                        <li>محمد هاني بني جابر</li>
                        <li>فاطمة هادي آل رزق</li>
                        <li>عبدالله محمود أحمد</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 order-1 order-lg-2">
                    <h5>تصميم الواجهات - Frontend</h5>
                    <ul>
                        
                        <li>أسامة عبد العزيز</li>
                        <li>شهد حسين الماس</li>
                        <li>نوف احمد نشيلي</li>
                        <li>ابتهال سالم آل مشرف</li>
                        <li>غلا سالم ال سالم</li>
                        <li>ريناد أحمد ال سوار</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 order-2 order-lg-3">
                    <h5>Backend و الدعم الفني</h5>
                    <ul>
                        <li>مأمون تركي طبق</li>
                        <li>محمد كمال سبع</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/technical-committee.css') }}" rel="stylesheet">
@endsection