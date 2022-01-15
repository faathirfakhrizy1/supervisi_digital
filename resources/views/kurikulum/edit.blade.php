@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    @foreach($data as $kuredits)
                    <form method="POST" action="/kurikulum/update/{{ $kuredits->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="">NIP</label>
                          <input id="nip" type="number" value="{{ $kuredits->nip}}" class="form-control @error('nip') is-invalid @enderror" name="nip" required autocomplete="nip" autofocus>
                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Nama</label>
                          <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $kuredits->nama}}" required autocomplete="nama" autofocus>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Alamat</label>
                          <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $kuredits->alamat}}" required autocomplete="alamat" autofocus>
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $kuredits->email}}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Role</label>
                          <select class="form-control" name="role" value="{{ $kuredits->role}}" id="role">
                            <option value="guru">Guru</option>
                            <option value="kepsek">Kepala Sekolah</option>
                            {{-- <option value="03">Buddha</option> --}}
                         </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
