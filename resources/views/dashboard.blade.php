@extends('layouts.app')

@section('content')

<div class="layout-px-spacing">

    @if (Auth::user()->level == 'Admin')
    <div class="row layout-top-spacing">

        <div class="col-lg-6 layout-spacing">
            <div class="widget-two">
                <div class="widget-content">
                    <div class="w-numeric-value justify-content-start">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </div>
                        <div class="w-content ml-3">
                            <span class="w-value">Rp.{{ number_format($total_pembelian_bulan_ini) }}</span>
                            <span class="w-numeric-title">Pembelian Bulan Ini</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 layout-spacing">
            <div class="widget-two">
                <div class="widget-content">
                    <div class="w-numeric-value justify-content-start">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </div>
                        <div class="w-content ml-3">
                            <span class="w-value">Rp.{{ number_format($total_penjualan_bulan_ini) }}</span>
                            <span class="w-numeric-title">Penjualan Bulan Ini</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 layout-spacing">
            <div class="widget-two">
                <div class="widget-content">
                    <div class="w-numeric-value justify-content-start">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-dollar-sign">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="w-content ml-3">
                            <span class="w-value">Rp.{{ number_format($hpp) }}</span>
                            <span class="w-numeric-title">HPP Bulan Ini</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 layout-spacing">
            <div class="widget-two">
                <div class="widget-content">
                    <div class="w-numeric-value justify-content-start">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-dollar-sign">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <div class="w-content ml-3">
                            <span class="w-value">Rp.{{ number_format($laba) }}</span>
                            <span class="w-numeric-title">Laba Bulan Ini</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="row layout-top-spacing">
        <div class="col-lg-8">
            <div class="statbox widget box box-shadow mb-4">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Obat Expired dalam 30 hari</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Obat</th>
                                    <th>Pembelian</th>
                                    <th>Stok</th>
                                    <th>Tanggal Expire</th>
                                    <th>Sisa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($goToExpire as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->obat->nama_obat }}</td>
                                    <td>{{ $item->pembelian->no_pembelian }}</td>
                                    <td>{{ $item->jumlah_sisa }}</td>
                                    <td>{{ $item->tanggal_expire }}</td>
                                    <td>{{ $sisa[$loop->index] }} Hari</td>
                                </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="6">Tidak ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>5 Obat Terlaris</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Obat</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laris as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->obat->nama_obat }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Chart</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}

</div>
<div class="row layout-top-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Grafik</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    // Membuat objek data untuk grafik
    const data = {
        labels: ['Pembelian', 'Penjualan', 'HPP', 'Laba'],
        datasets: [{
            label: 'Bulan Ini',
            data: [
                {{ $total_pembelian_bulan_ini }},
                {{ $total_penjualan_bulan_ini }},
                {{ $hpp }},
                {{ $laba }}
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Membuat objek konfigurasi grafik
    const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

    // Membuat instance Chart baru dengan menggunakan objek konfigurasi
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, config);
</script>





@endsection
