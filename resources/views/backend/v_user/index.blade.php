@extends('backend.v_layouts.app')

@section('content')

<div class="col-xs-12">
    <div class="box-content">
        <div class="row">
            <div class="col-md-6">
                <h4 class="box-title">{{$judul}}</h4>
            </div>
            <div class="col-md-12">
                <a href="/user/create">
                    <button type="button" class= "btn-info btn-xs waves-effect waves-light">
                    <i class="ico fa fa-plus"></i>Tambah</button>
                </a>
            </div>
            <br><br>
        </div>

        <table id="example" class="table table-striped table-bordered display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($index as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>
                        @if ($row->role == 1)
                        <span class="label label-success">Super Admin</span>
                        @elseif($row->role == 0)
                        <span class="label label-info">Admin</span>
                        @elseif($row->role == 2)
                        <span class="label label-warning">Anggota</span>
                        @endif
                    </td>
                    <td>
                        @if ($row->status == 1)
                        <span class="label label-success">Aktif</span>
                        @elseif($row->status == 0)
                        <span class="label label-default">NonAktif</span>
                        @endif
                    </td>
                    <td>
                        <a href="/user/{{ $row->id }}/edit" title="Ubah Data" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Ubah
                        </a>
                        <form method="POST" action="{{ route('user.destroy', $row->id) }}" style="display: inline-block;">
                            @method('delete')
                            @csrf
                            <button type="button" class="btn btn-danger btn-sm show_confirm" data-toggle="tooltip" title='Delete' data-konf-delete="{{ $row->nama }}">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
