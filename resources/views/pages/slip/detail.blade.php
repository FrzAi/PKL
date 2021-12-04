@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
               <table class="table table-bordered border-3" >

			<tr>
                <th width="30" class="align-middle">Ket</th>
                <th width="300">{{ $item->keterangan }}</th>
				<th width="50">
					<p class="align-middle">TANGGAL</p>
					<p class="align-middle">KEPADA</p>
				</th>
				<td colspan="3">
					<p class="text-center align-middle">{{ $item->tanggal }}</p>
					<p class="text-center align-middle">{{ $item->nama }}</p>
				</td>
			<tr>
                <td></td>
                <th>
                	<p class="text-center">SLIP ORDER PEMBELIAN</p>
                </th>
                <td colspan="4"></td>
			</tr>
			<tr>
                <td></td>
                <th>
                	<p class="text-center">NAMA BARANG</p>
                </th>
                <th colspan="2">
                	<p class="text-center">BANYAKNYA</p>
                </th>
				<th >
					<p class="text-center">@Rp</p>
				</th>
				<th>
					<p class="text-center">JUMLAH(Rp)</p>
				</th>
			</tr>
			<tr>
				<td></td>
				<td class="text-center align-middle">{{ $item->nama_barang }}</td>
				<td class="text-center align-middle">{{ $item->qty }}</td>
				<td class="text-center align-middle">BKS</td>
				<td class="text-center align-middle">{{ $item->biaya }}</td>
				<td class="text-center align-middle">{{ $item->total_biaya }}</td>
			</tr>
			<tr>
                <td></td>
                <th>
                	<p class="text-center">JUMLAH</p>
                </th>
				<td colspan="3" class="text-center align-middle"></td>
				<td>
					<p class="text-center align-middle">{{ $item->total_biaya }}</p>
				</td>
			</tr>
			<tr>
                <td></td>
                <th>
                	<p class="text-center">JUMLAH</p>
                </th>
				<td colspan="3">
					<p>&emsp;Pajak 1.5%</p>
				</td>
				<td>
					<p class="text-center align-middle">{{ ($item->total_biaya * 1.5) / 100 }}</p>
				</td>
			</tr>
			<tr>
                <td></td>
                <th>
                	<p class="text-center">TOTAL</p>
                </th>
				<td colspan="3"></td>
				<td>
					<p class="text-center align-middle">{{$item->total_biaya + ($item->total_biaya * 1.5) / 100 }}</p>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<p class="text-center">Disetujui Oleh,</p> <br><br>
					<p class="text-center"><b><u>Drs.Zainuddin M.Rasyid</u></b></p>
                	<p class="text-center">Direktur Utama</p>
				</td>
				<td colspan="3">
					<p class="text-center">Diminta Oleh,</p><br><br>
					<p class="text-center"><b><u>Zuraida, S.pd</u></b></p>
                	<p class="text-center">Kabag ADM & Keuangan</p>
                </td>
				<td >
					<p class="text-center">Disiapkan Oleh,</p><br><br>
					<p class="text-center"><b><u>Hamdan SE</u></b></p>
                	<p class="text-center">Kasubbag Administrasi Umum</p>
                </td>
			</tr>
		</table>
		<a href="#" class="btn btn-info ds" onclick="window.print()"><i class="fa fa-print"></i> Cetak Struk</a>
		<a href="?" class="btn btn-danger ds">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
