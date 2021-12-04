@extends('layouts.index')

@section('content')
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('kwitansi.store') }}" method="post">
                      @csrf
                    
                    <div class="form-group">
                        <label for="id_slip">ID Slip</label>
                        <input type="number" name="id_slip" value="{{ old('id_slip') }}" class="form-control" placeholder="id_slip">
                    </div>  
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" class="form-control" placeholder="pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" value="{{ old('keterangan') }}" class="form-control" placeholder="keterangan">
                    </div>
                    <div class="form-group">
                        <label for="biaya">Biaya</label>
                        <input type="number" name="biaya" value="{{ old('biaya') }}" class="form-control" placeholder="biaya">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="form-control" placeholder="tanggal">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
@endsection
