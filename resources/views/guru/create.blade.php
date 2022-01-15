@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('guru.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="">NIP</label>
                          @foreach($ngambilnip as $dt)
                          <input disabled type="number" name="nip" class="form-control" value="{{$dt->nip}}" required  autofocus>
                          @endforeach
                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Mata Pelajaran</label>
                          <input id="mapel" type="text" class="form-control @error('mapel') is-invalid @enderror" name="mapel" value="{{ old('mapel') }}" required autocomplete="mapel" autofocus>
                            @error('mapel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">RPP</label>
                          <input id="rpp" type="file" class="form-control @error('rpp') is-invalid @enderror" name="rpp" value="{{ old('rpp') }}" required autocomplete="rpp" autofocus>
                            @error('rpp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Embed</label>
                          <input id="embed" type="link" class="form-control @error('embed') is-invalid @enderror" name="embed" value="{{ old('embed') }}" required autocomplete="embed" autofocus placeholder="https://www.youtube.com/watch?v=a-IM-th_6V0">
                            @error('embed')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                          <label for="">Status</label>
                          <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
                            @error('status')
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
