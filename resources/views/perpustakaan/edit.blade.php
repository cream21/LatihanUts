@extends('template.master-perpus')

@section('judul','tambah-perpus')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Tambah Data perpus</h3>
                        </div>
                        <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                   
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                   
                                </ul>
                            </div>
                            @endif
                            <form action="{{ url('edit-perpus')}}/{{ $data->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="iidd">Id</label>
                                    <input type="number" id="iidd" name="id" class="form-control" value="{{old('id', $data->id)}}" autocomplete="off" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nb">Nama Buku</label>
                                    <input type="text" id="nb" name="nama_buku" class="form-control" value="{{old('nama_buku', $data->nama_buku)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pb">Penerbit</label>
                                    <input type="text" id="pb" name="penerbit" class="form-control" value="{{old('penerbit', $data->penerbit)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pg">Pengarang</label>
                                    <input type="text" id="pg" name="pengarang" class="form-control" value="{{old('pengarang', $data->pengarang)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jb">Jumlah Buku</label>
                                    <input type="text" id="jb" name="jumlah_buku" class="form-control" value="{{old('jumlah_buku', $data->jumlah_buku)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kt">Keterangan</label>
                                    <textarea name="keterangan" id="kt" cols="30" rows="2" autocomplete="off">{{old('keterangan', $data->keterangan)}}</textarea >
                                </div>
                               
                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                            <a class="btn btn-primary" href="{{ url('data-perpus') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection