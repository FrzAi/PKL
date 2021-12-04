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
                <form action="{{ route('kwitansi.update',$item->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="id_slip">ID Slip</label>
                        <input type="number" name="id_slip" value="{{ $item->id_slip }}" class="form-control" placeholder="id_slip">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="{{ $item->nama }}" class="form-control" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" value="{{ $item->pekerjaan }}" class="form-control" placeholder="pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="{{ $item->alamat }}" class="form-control" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" value="{{ $item->keterangan }}" class="form-control" placeholder="keterangan">
                    </div>
                    <div class="form-group">
                        <label for="biaya">Biaya</label>
                        <input type="number" name="biaya" value="{{ $item->biaya }}" class="form-control" placeholder="biaya">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" value="{{ $item->tanggal }}" class="form-control" placeholder="tanggal">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Update</button>
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
