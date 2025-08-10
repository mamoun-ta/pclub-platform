@extends('layouts.main')

@section('title', 'البرمجة التنافسية | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        @include('programming.layouts.header')

        <h1 class="titel-page">leetcode problems</h1>


        <div class="content">
            <div class="card">
                <img src="{{ asset('img/programming/linkedlist.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Remove Duplicates from Sorted List</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/remove-duplicates-from-sorted-list/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/linkedlist.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                
                    Reverse Linked List</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/reverse-linked-list/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/linkedlist.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Merge Two Sorted Lists</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/merge-two-sorted-lists/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/linkedlist.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Insert Greatest Common Divisors in Linked List</h5>
                    <p class="card-text"></p>
                    <a href="https://leetcode.com/problems/insert-greatest-common-divisors-in-linked-list/description/" class="btn btn-primary">Take up the challenge</a>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/programming.css') }}" rel="stylesheet">
@endsection