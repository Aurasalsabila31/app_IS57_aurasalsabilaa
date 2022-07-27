@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Data Pasien</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pasien</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
        <a href="/pasien/form" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                    <th>JENIS</th>
                    <th>JENIS KELAMIN</th>
                    <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pasien as $item)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$item->nik}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->tanggal_lahir}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->jenis}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>
                            <a href="/pasien/edit/{{$item->id}}" class="btn btn-sm text-white btn-info"><i class="fa fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#a{{$item->id}}">
                                  <i class="fa fa-trash-alt"></i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                      </div>
                                      <div class="modal-body">
                                        Yakin ingin menghapus pasien <b>{{$item->nik}}-{{$item->pasien}}</b> ?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <form method="POST" action="/pasien/{{$item->id}}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </td>
                    </tr> 
                    @empty
                    <tr>
                        <td colspan="4">Belum Ada Data</td>
                    </tr>
                    @endforelse
                    
                </tbody>
                </table>
            </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection