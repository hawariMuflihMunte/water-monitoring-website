@extends('dashboard.layouts.main')

@section('container')
<!-- Content -->
  <div class="container flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-12 order-1">
        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <h3 class="fw-semibold d-block mb-1">PH</h3>
              <h3 id="ph" class="card-title mb-2">0</h3>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <h3 class="fw-semibold d-block mb-1">Kelembaban Tanah</h3>
              <h3 id="kelembabanTanah" class="card-title mb-2">0</h3>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <h3 class="fw-semibold d-block mb-1">Temperatur Tanah</h3>
              <h3 id="temperaturTanah" class="card-title text-nowrap mb-2">0</h3>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <h3 class="fw-semibold d-block mb-1">Kadar Nutrisi Tanah</h3>
              <h3 id="kadarNutrisiTanah" class="card-title mb-2">0</h3>
            </div>
          </div>
        </div>
      </div>
  </div>
  {{ request('ph') }}

@include('dashboard.realtime')
<!-- / Content -->
@endsection
