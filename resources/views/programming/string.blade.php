@extends('layouts.main')

@section('title', 'البرمجة التنافسية | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        @include('programming.layouts.header')

        <h1 class="titel-page">leetcode problems</h1>
        <div class="animated-box"></div>

        <div class="content">
            <div class="card">
                <img src="{{ asset('img/programming/string.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">
                
                    1768. Merge Strings Alternately</h5>
                <p class="card-text"></p>
                <a href="https://leetcode.com/problems/merge-strings-alternately/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/string.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">
                
                    13. Roman to Integer</h5>
                <p class="card-text"></p>
                <a href="https://leetcode.com/problems/roman-to-integer/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/string.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">392. Is Subsequence</h5>
                <p class="card-text"></p>
                <a href="https://leetcode.com/problems/is-subsequence/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/programming.css') }}" rel="stylesheet">
@endsection