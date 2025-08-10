@extends('layouts.main')

@section('title', 'البرمجة التنافسية | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        @include('programming.layouts.header')

        <h1 class="titel-page">leetcode problems</h1>

        <div class="content">
            <div class="card">
                <img src="{{ asset('img/programming/stack&queue.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                
                    Baseball Game</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/baseball-game/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/stack&queue.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Valid Parentheses</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/valid-parentheses/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/stack&queue.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Evaluate Reverse Polish Notation</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/evaluate-reverse-polish-notation/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/stack&queue.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Min Stack</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/min-stack/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/programming.css') }}" rel="stylesheet">
@endsection