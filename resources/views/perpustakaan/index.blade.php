@extends('template.master-perpus')

@section('judul','Data-')

@section('content')
<div class="content-wrapper">
   <section class="content">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header bg-primary">
                     <h3 class="card-title">Data Perpus</h3>
                  </div>
                  <div class="card-body">
                  <a class="btn btn-success mb-3" href="{{ url('add-perpus')}}" role="button"><i class="fas fa-add"></i> Tambah Data</a>
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr class="bg-info">
                              <th>No</th>
                              <th>id</th>
                              <th>Nama Buku</th>
                              <th>Penerbit</th>
                              <th>Pengarang</th>
                              <th>Jumlah Buku</th>
                              <th>Keterangan</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $row)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $row->id }}</td>
                              <td>{{ $row->nama_buku }}</td>
                              <td>{{ $row->penerbit }}</td>
                              <td>{{ $row->pengarang }}</td>
                              <td>{{ $row->jumlah_buku }}</td>
                              <td>{{ $row->keterangan }}</td>
                              <td>
                                 <a class="btn btn-success btn-sm" href="{{ url('edit-perpus')}}/{{ $row->id }}/edit" role="button"><i class="fas fa-add"></i> Update </a>
                                    <form action=" {{ route('delete.perpus', $row->id) }}" method="post" class="d-inline">
                                 @csrf
                                 @method('delete')
                                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                    </form>
                                 </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection