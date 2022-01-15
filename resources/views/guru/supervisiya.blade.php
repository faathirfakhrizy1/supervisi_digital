@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Jadwal Supervisi') }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-hover" id="example1" >
                        <thead>
                            <tr class="text-center">
                                <th>Supervisor</th>
                                <th>Tanggal</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tbody> -->
                            @foreach ($data as $dt)
                            <tr class="text-center">
                                @if($dt=='')
                                <td colspan="5">Belum ada jadwal</td>
                                @else
                                <td>{{$dt->id_supervisor}}</td>
                                <td>{{$dt->tanggal}}</td>
                                <td>{{$dt->jam_mulai}}</td>
                                <td>{{$dt->jam_selesai}}</td>
                                @endif
                            @endforeach
                        <!-- </tbody> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
