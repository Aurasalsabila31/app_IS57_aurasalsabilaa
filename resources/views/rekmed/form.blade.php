+@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Tambah Rekmed</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Tambah Rekmed</li>
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
            <form class="form-horizontal" action="/rekmed/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Rekmed</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="no_rekmed">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nik</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="nik">
                      {{-- <select name="nik" class="form-control" id="">
                        <option value="">-Pilih Nik-</option>
                        @foreach ($pasien as $item)
                          <option value="{{$item->id}}">{{$item->nik}}</option>
                        @endforeach
                        
                      </select> --}}
                    </div>
  
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Berobat</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputEmail3" name="tanggal_berobat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Dianogsa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="dianogsa">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Obat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="kode_obat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Transaksi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="transaksi">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
                  <a href="/rekmed" class="btn btn-default float-right">Batal</a>
                </div>
                <!-- /.card-footer -->
              </form>        
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection