@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Progress: {{ $exercise }}</h2>

    <canvas id="progressChart" height="100"></canvas>

    <p class="text-muted mt-3" style="font-style: italic;">
        Volume = Set × Repetisi × Beban
    </p>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('progressChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($data->pluck('date')) !!},
            datasets: [{
                label: '{{ $exercise }}',
                data: {!! json_encode($data->pluck('volume')) !!},
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.3,
                pointRadius: 4,
                pointHoverRadius: 6,
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Total Volume / Durasi'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Tanggal'
                    }
                }
            }
        }
    });
</script>
@endpush
