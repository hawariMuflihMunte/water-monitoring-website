@extends('dashboard.layouts.main')

@section('container')
<!-- Content -->
  <div class="container flex-grow-1 container-p-y">
    <div class="row row-cols-2 w-100 h-100">
      <div class="col-6 p-3">
        <div class="card h-100">
          <div class="card-body pb-4">
            <h3 class="fw-semibold d-block mb-1 text-center">Suhu</h3>
            <hr>
            <h3 class="card-title text-nowrap mb-2 bg-light text-center text-success d-flex justify-content-center align-items-center rounded" style="height: 75%; font-size: 400%"><span id="suhu">0</span>°C</h3>
          </div>
        </div>
      </div>
      <div class="col-6 p-3">
        <div class="card h-100">
          <div class="card-body pb-4">
            <h3 class="fw-semibold d-block mb-1 text-center">TDS</h3>
            <hr>
            <h3 class="card-title text-nowrap mb-2 bg-light text-center text-success d-flex justify-content-center align-items-center rounded" style="height: 75%; font-size: 400%"><span id="tds">0</span>&nbsp;ppm</h3>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
      <div class="col-8 p-3">
        <div class="card h-100">
          <div class="card-body pb-4">
            <h3 class="fw-semibold d-block mb-1 text-center">PH</h3>
            <hr>
            <h3 class="card-title text-nowrap mb-2 bg-light text-center text-success d-flex justify-content-center align-items-center rounded" style="height: 75%; font-size: 400%"><span id="ph">0</span></h3>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
      <div class="col-12 px-3 py-3">
        <div class="bg-light shadow-sm rounded">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Pukul</th>
                    <th>Suhu</th>
                    <th>PH</th>
                    <th>TDS</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($controls as $control)
                  <tr>
                      <td>{{ $control->created_at->format('d M Y') }}</td>
                      <td><strong>{{ $control->created_at->format('H:i') }}</strong></td>
                      <td>{{ $control->suhu }}°C</td>
                      <td>{{ $control->ph }}</td>
                      <td>{{ $control->tds }} ppm</td>
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
