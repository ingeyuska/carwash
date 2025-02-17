@extends('backend.v_layouts.app')

@section('content')

<div class="col-lg-12 col-xs-12">
    <div class="box-content card white">
        <h4 class="box-title">{{ $judul }}</h4>
        <!-- /.box-title -->
        <div class="card-content">
            <form action="/anggota/{{ $edit->id }}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" id="" value="{{ old('nama',$edit->nama) }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                    @error('nama')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>HP</label>
                    <input type="text" name="hp" id="" value="{{ old('hp',$edit->hp) }}" class="form-control @error('hp') is-invalid @enderror" placeholder="Masukkan HP">
                    @error('hp')
                    <span class="invalid-feedback alert-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Perbaharui</button>
                    <a href="{{ route('anggota.index') }}" class="btn btn-secondary btn-sm waves-effect waves-light">Kembali</a>
                </div>
            </form>
        </div>
        <!-- /.card-content -->
    </div>
    <!-- /.box-content -->
</div>

@endsection
