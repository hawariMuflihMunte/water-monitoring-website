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
      <div class="col-12 px-3 py-3">
        <div class="bg-light shadow-sm rounded">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Pukul</th>
                    <th>Suhu</th>
                    <th>Keruh</th>
                    <th>pH</th>
                    <th>Oksigen</th>
                    <th>Water Pump</th>
                    <th>Aerator</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($controls as $control)
                  <tr>
                      <td>{{ $control->created_at->format('d M Y') }}</td>
                      <td><strong>{{ $control->created_at->format('H:i') }}</strong></td>
                      <td>{{ $control->temperature }}</td>
                      <td>{{ $control->turbidity }}</td>
                      <td>{{ $control->ph }}</td>
                      <td>{{ $control->dissolved_oxygen }}</td>
                      <td><span class="badge me-1 {{ $control->water_pump == 'off' ? 'bg-label-danger' : 'bg-label-success' }}">{{ $control->water_pump }}</td>
                      <td><span class="badge me-1 {{ $control->aerator == 'off' ? 'bg-label-danger' : 'bg-label-success' }}">{{ $control->aerator }}</span></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('dashboard.realtime')
<!-- / Content -->
@endsection
