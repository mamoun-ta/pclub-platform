@extends('layouts.main')

@section('title', 'البرمجة التنافسية | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        @include('programming.layouts.header')
        <h1 class="titel-page">leetcode problems</h1>

        <div class="content">
            <div class="card">
                <img src="{{ asset('img/programming/array.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Find Closest Number to Zero</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/find-closest-number-to-zero/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/array.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Remove Duplicates from Sorted Array</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/remove-duplicates-from-sorted-array/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/array.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Sort Colors</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/sort-colors/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/array.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Best Time to Buy and Sell Stock</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/best-time-to-buy-and-sell-stock/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/programming.css') }}" rel="stylesheet">
@endsection