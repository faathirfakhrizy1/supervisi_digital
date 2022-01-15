@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Jadwal') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jadwal.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nip">Target Supervisi</label>
                            <div class="col-md-12 ">
                                <select class="form-control" name="nip" id="nip">
                                    <option value="" selected disabled>Pilih...</option>
                                    @foreach ($targetSupervisor as $item)
                                        <option value="{{$item->nip}}" {{old('nip') == $item->nip ? 'selected' : ''}}>{{$item->nama}}</option>
                                    @endforeach
                                </select>
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nip">Supervisor</label>
                            <div class="col-md-12 ">
                                <select class="form-control" name="id_supervisor" id="id_supervisor">
                                    <option value="" selected disabled>Pilih...</option>
                                    @foreach ($supervisor as $item)
                                        <option value="{{$item->nip}}" {{old('nip') == $item->nip ? 'selected' : ''}}>{{$item->nama}}</option>
                                    @endforeach
                                </select>
                                @error('id_supervisor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="">Tanggal</label>
                          <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" required autocomplete="tanggal" autofocus>
                            @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jam Mulai</label>
                            <input id="jam_mulai" type="time" class="form-control @error('jam_mulai') is-invalid @enderror" name="jam_mulai" value="{{ old('jam_mulai') }}" required autocomplete="jam_mulai" autofocus>
                              @error('jam_mulai')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        <div class="form-group">
                          <label for="">Jam Selesai</label>
                          <input id="jam_selesai" type="time" class="form-control @error('jam_selesai') is-invalid @enderror" name="jam_selesai" value="{{ old('jam_selesai') }}" required autocomplete="jam_selesai" autofocus>
                            @error('jam_selesai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                          <label for="">Nip</label>
                          <input id="nip" type="number" onchange="searchid()" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>
                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <br>
                        <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
