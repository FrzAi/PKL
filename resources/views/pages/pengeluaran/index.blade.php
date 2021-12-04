@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
              <div class="row col-2 d-flex float-end mb-3">
                  <form action="{{ route('cari.pengeluaran') }}" method="get">
                  @csrf
                  <input type="cari" name="cari" placeholder="Search..." class="form-control mt-0 align-items-center">
                  </form>
              </div>
               <div class="col-6 mb-3">
                  <a href="{{ route('pengeluaran.create') }}" class="btn btn-success shadow-sm">Add</a>
                  <a href="{{ route('print.pengeluaran') }}" class="btn btn-info shadow-sm">Print</a>
               </div>
                <div class="table-responsive">
                    @php
                        $no = 1;
                    @endphp
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">ID kwitansi</th>
                                <th class="border-top-0">Tanggal</th>
                                <th class="border-top-0">Keterangan</th>
                                <th class="border-top-0">Biaya</th>
                                <th class="border-top-0">OPT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ $item->id_kwitansi }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->biaya }}</td>
                                    <td>
                                    <a href="{{ route('pengeluaran.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('pengeluaran.destroy', $item->id) }}" method="post" class="d-inline">
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

</div>
@endsection
