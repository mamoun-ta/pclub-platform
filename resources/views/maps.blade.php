@extends('layouts.main')

@section('title', 'خرائط الطريق | منصة نادي البرمجة التعليمية')

@section('main')
    <main>
        <h1 class="title-page">خرائط الطريق</h1>

        <div class="content">
            <div class="card">
                <img src="{{ asset('img/programming/java.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Java Roadmap (Roadmap.sh)</h5>
                    <a href="https://roadmap.sh/java" class="btn btn-primary">Git Link</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/github.png') }}" class="card-img-top" alt="...">
                <div class="card-body  ">
                    <h5 class="card-title">Java Roadmap (GitHub)
                </h5>
                    <a href="https://github.com/s4kibs4mi/java-developer-roadmap?tab=readme-ov-file" class="btn btn-primary">Git Link</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/python.png') }}" class="card-img-top" alt="...">
                <div class="card-body  ">
                    <h5 class="card-title">Python Roadmap </h5>
                    <a href="https://roadmap.sh/python" class="btn btn-primary">Git Link</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/sql.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body  ">
                    <h5 class="card-title">SQL Roadmap </h5>
                    <a href="https://roadmap.sh/sql" class="btn btn-primary ">Git Link</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('img/programming/dsa.png') }}" class="card-img-top" alt="...">
                <div class="card-body  ">
                    <h5 class="card-title">Data Structures & Algorithms</h5>
                    <a href="https://roadmap.sh/datastructures-and-algorithms" class="btn btn-primary">Git Link</a>
                </div>
            </div>

        </div>
            
    </main>
@endsection

@section('styles')
    <link href="{{ asset('assets/css/maps.css') }}" rel="stylesheet">
@endsection