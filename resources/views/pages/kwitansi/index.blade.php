@extends('layouts.index')

@section('content')
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
               <div class="row col-2 d-flex float-end mb-3">
                  <form action="{{ route('cari.kwitansi') }}" method="get">
                  @csrf
                  <input type="cari" name="cari" placeholder="Search..." class="form-control mt-0 align-items-center">
                  </form>
              </div>
               <div class="col-6 mb-3">
                  <a href="{{ route('kwitansi.create') }}" class="btn btn-success shadow-sm">Add</a>
               </div>
                <div class="table-responsive">
                    @php
                        $no = 1;
                    @endphp
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">ID Slip</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Pekerjaan</th>
                                <th class="border-top-0">Alamat</th>
                                <th class="border-top-0">Keterangan</th>
                                <th class="border-top-0">Biaya</th>
                                <th class="border-top-0">Tanggal</th>
                                <th class="border-top-0">OPT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->id_slip }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->pekerjaan }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->biaya }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>
                                    <a href="{{ route('kwitansi.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{ route('kwitansi.show', $item->id) }}" class="btn btn-warning">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <form action="{{ route('kwitansi.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')

                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Belom ada data</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
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
