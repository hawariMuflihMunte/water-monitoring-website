@extends('dashboard.layouts.main')

@section('container')
<!-- Content -->
  <div class="container flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-8 order-1">
        <div class="row align-items-stretch">
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Suhu Air</h3>
                <h3 id="suhu" class="card-title mb-2">0</h3>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Kekeruhan Air</h3>
                <h3 id="kekeruhan" class="card-title mb-2">0</h3>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">pH Air</h3>
                <h3 id="ph" class="card-title text-nowrap mb-2">0</h3>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Oksigen Air</h3>
                <h3 id="oksigen" class="card-title mb-2">0</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

@include('dashboard.realtime')
<!-- / Content -->
@endsection
