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
                                <th>NIP</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
                                <th>SUPERVISOR</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tbody> -->
                            @foreach ($data as $dt)
                            <tr class="text-center">
                                <td>{{$dt->nip}}</td>
                                <td>{{$dt->nama}}</td>
                                <td>{{$dt->alamat}}</td>
                                <td>{{$dt->email}}</td>
                                <td>{{$dt->role}}</td>
                                @if($dt->supervisor == 0)
                                <td>
                                    <a href="{{ route('kuri.aktif', $dt->id) }}" class="btn btn-primary">Aktifkan</a>
                                </td>
                                @else
                                <td>
                                    <a href="{{ route('kuri.nonaktif', $dt->id) }}" class="btn btn-success">Non Aktifkan</a>
                                </td>
                                @endif
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
