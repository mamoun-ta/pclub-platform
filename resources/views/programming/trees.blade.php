@extends('layouts.main')

@section('title', 'البرمجة التنافسية | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        @include('programming.layouts.header')

        <h1 class="titel-page">leetcode problems</h1>

        <div class="content">
            <div class="card">
                <img src="{{ asset('img/programming/trees.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Invert Binary Tree</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/invert-binary-tree/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/trees.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Maximum Depth of Binary Tree</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/maximum-depth-of-binary-tree/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/trees.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Balanced Binary Tree</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/balanced-binary-tree/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/trees.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Subtree of Another Tree</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/subtree-of-another-tree/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/programming.css') }}" rel="stylesheet">
@endsection