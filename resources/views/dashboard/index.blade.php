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
      <div class="col-12 px-3 py-3 order-2">
        <div class="bg-light shadow-sm rounded">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Pukul</th>
                    <th>PH</th>
                    <th>Kelembaban Tanah</th>
                    <th>Temperatur Tanah</th>
                    <th>Oksigen</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($controls as $control)
                  <tr>
                      <td>{{ $control->created_at->format('d M Y') }}</td>
                      <td><strong>{{ $control->created_at->format('H:i') }}</strong></td>
                      <td>{{ $control->ph }}</td>
                      <td>{{ $control->kelembaban_tanah }}</td>
                      <td>{{ $control->temperatur_tanah }}</td>
                      <td>{{ $control->kadar_nutrisi_tanah }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>

@include('dashboard.realtime')
<!-- / Content -->
@endsection
