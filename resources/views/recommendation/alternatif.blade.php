@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Alternatif Latihan</h1>

    @if($latihan->count())
        <ul class="list-group">
            @foreach ($latihan as $ex)
                <li class="list-group-item">
                    {{ $ex->exercise_name }} – {{ $ex->sets }} x {{ $ex->reps }} (Fokus: {{ $ex->muscle_focus }})
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-warning mt-4">
            Tidak ditemukan alternatif latihan dengan fokus otot yang sama.
        </div>
    @endif

    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">← Kembali</a>
</div>
@endsection
