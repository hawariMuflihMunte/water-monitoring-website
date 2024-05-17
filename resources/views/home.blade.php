@extends('layouts.main')

@section('container')

    <!-- Header Start -->
    <div class="container-fluid hero-header py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/heroWeb.png" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Web Monitoring IoT</h1>
                    <a href="/dashboard" class="btn btn-primary py-3 px-4 animated slideInDown">Mulai Monitoring</a>
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->

@endsection
