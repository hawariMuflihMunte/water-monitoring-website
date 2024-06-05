@extends('dashboard.layouts.main')

@section('container')
<!-- Content -->
  <div class="container flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-12 order-1">
        <div class="row flex-grow01">

          <div class="col-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">PH</h3>
                <hr>
                <h3 class="card-title mb-2"><span class="m-0 p-0" id="ph">0</span></h3>
              </div>
            </div>
          </div>
          <div class="col-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Kelembaban</h3>
                <hr>
                <h3 class="card-title mb-2"><span class="m-0 p-0" id="kelembaban">0</span>%</h3>
              </div>
            </div>
          </div>
          <div class="col-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Temperatur</h3>
                <hr>
                <h3 class="card-title text-nowrap mb-2"><span class="m-0 p-0" id="temperatur">0</span>°C</h3>
              </div>
            </div>
          </div>
          <div class="col-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Nitrogen</h3>
                <hr>
                <h3 class="card-title mb-2"><span class="m-0 p-0" id="nitrogen">0</span>%</h3>
              </div>
            </div>
          </div>
          <div class="col-3"></div>
          <div class="col-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Fosfor</h3>
                <hr>
                <h3 class="card-title mb-2"><span class="m-0 p-0" id="fosfor">0</span>%</h3>
              </div>
            </div>
          </div>
          <div class="col-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h3 class="fw-semibold d-block mb-1">Kalium</h3>
                <hr>
                <h3 class="card-title mb-2"><span class="m-0 p-0" id="kalium">0</span>%</h3>
              </div>
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
                    <th>Kelembaban</th>
                    <th>Temperatur</th>
                    <th>Nitrogen</th>
                    <th>Fosfor</th>
                    <th>Kalium</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($controls as $control)
                  <tr>
                      <td>{{ $control->created_at->format('d M Y') }}</td>
                      <td><strong>{{ $control->created_at->format('H:i') }}</strong></td>
                      <td>{{ $control->ph }}</td>
                      <td>{{ $control->kelembaban }}%</td>
                      <td>{{ $control->temperatur }}°C</td>
                      <td>{{ $control->nitrogen }}%</td>
                      <td>{{ $control->fosfor }}%</td>
                      <td>{{ $control->kalium }}%</td>
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
