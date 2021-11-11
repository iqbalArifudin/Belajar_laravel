@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <!--akses lewat php artisan-->
            <!-- <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a> -->
            <!--akses lewat url xampp-->
            <a href="{{url('/students/create')}}" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <!--akses lewat php artisan-->
                    <!-- <a href="/students/{{$student->id}}" class="btn btn-info">Detail</a> -->
                    <!--akses lewat url xampp-->
                    <a href="{{ url('students/'. $student->id) }}" class="btn btn-info">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
<!-- Optional JavaScript; choose one of the two! -->