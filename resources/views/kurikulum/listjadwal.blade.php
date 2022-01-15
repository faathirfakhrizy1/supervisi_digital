@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-hover" id="example1" >
                        <thead>
                            <tr class="text-center">
                                <th>Supervisor</th>
                                <th>Tanggal</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Target Supervisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tbody> -->
                            @foreach ($data as $dt)
                            <tr class="text-center">
                                <td>{{$dt->id_supervisor}}</td>
                                <td>{{$dt->tanggal}}</td>
                                <td>{{$dt->jam_mulai}}</td>
                                <td>{{$dt->jam_selesai}}</td>
                                <td>{{$dt->nip}}</td>
                                <td >
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <form action="{{ route('kuri.delete', $dt->id) }}">
                                                <a onclick="confirm('hapus akun ini?')" class="btn btn-danger">Hapus</a>
                                            </form>
                                        {{-- <li><a class="dropdown-item" href="#">Hapus</a></li> --}}
                                        <li><a class="dropdown-item" class="btn btn-secondary" href="{{ route('kuri.edit', $dt->id) }}">Edit</a></li>
                                        </ul>
                                    </div>

                                </td>
                            @endforeach
                        <!-- </tbody> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
