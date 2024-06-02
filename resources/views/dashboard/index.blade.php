@extends('dashboard.layouts.main')

@section('container')
<!-- Content -->
  <div class="container flex-grow-1 container-p-y">
    <div class="row row-cols-2 w-100 h-100">
      <div class="col-6 p-3">
        <div class="card h-100">
          <div class="card-body pb-4">
            <h3 class="fw-semibold d-block mb-1 text-center">Suhu Air</h3>
            <h3 id="suhu" class="card-title text-nowrap mb-2 bg-dark text-center text-white d-flex justify-content-center align-items-center rounded" style="height: 88%">0</h3>
          </div>
        </div>
      </div>
      <div class="col-6 p-3">
        <div class="card h-100">
          <div class="card-body pb-4">
            <h3 class="fw-semibold d-block mb-1 text-center">Kekeruhan Air</h3>
            <h3 id="kekeruhan" class="card-title text-nowrap mb-2 bg-dark text-center text-white d-flex justify-content-center align-items-center rounded" style="height: 88%">0</h3>
          </div>
        </div>
      </div>
      <div class="col-6 p-3">
        <div class="card h-100">
          <div class="card-body pb-4">
            <h3 class="fw-semibold d-block mb-1 text-center">pH Air</h3>
            <h3 id="ph" class="card-title text-nowrap mb-2 bg-dark text-center text-white d-flex justify-content-center align-items-center rounded" style="height: 88%">0</h3>
          </div>
        </div>
      </div>
      <div class="col-6 p-3">
        <div class="card h-100">
          <div class="card-body pb-4">
            <h3 class="fw-semibold d-block mb-1 text-center">Oksigen Air</h3>
            <h3 id="oksigen" class="card-title text-nowrap mb-2 bg-dark text-center text-white d-flex justify-content-center align-items-center rounded" style="height: 88%">0</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8 order-1">
        <div class="row align-items-stretch">

        </div>
      </div>
  </div>

@include('dashboard.realtime')
<!-- / Content -->
@endsection
