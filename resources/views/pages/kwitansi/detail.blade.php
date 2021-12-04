@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
               <table class="table table-bordered border-3" >
			   <!-- <table class="table table-striped table-bordered" >								 -->
					<tr>
						<td>
							<p align="center">No. <span style="padding-left:30px;">:<span style="padding-left:30px;"><u>&emsp;&emsp;&emsp;&emsp;</u></p>
							<p align="center">M.A <span style="padding-left:30px;">:<span style="padding-left:30px;"><u>&emsp;&emsp;&emsp;&emsp;</u></p>
							<p align="center">Tahun <span style="padding-left:22px;">:<span style="padding-left:30px;"><u>&emsp;<?= date('Y');?>&emsp;</u></p>
						</td>
						<td>
							<p align="center"><u>A s l i &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u></p>
							<p align="center"><u>K e d u a &ensp;&emsp;&emsp;&emsp;&emsp;</u></p>
							<p align="center"><u>K e t i g a &emsp;&emsp;&emsp;&emsp;</u></p>

						</td>
					<tr>
						<td colspan="2">
						<h3 align="center"><u>TANDA PENERIMAAN</u></h3>
						<p align="left">  <?php echo "Sudah Terima Dari"?><span style="padding-left:17px;">: Bendahara Pengeluaran Perumda Tirta Pase Kabupaten Aceh Utara</p>
				 	 	<p align="left">  <?php echo "Uang Banyaknya"?><span style="padding-left:29px;">: == {{ Terbilang($item->biaya) }}  ==</p>
				  		<p align="left">  <?php echo "YAITU"?><span style="padding-left:104px;">: {{ $item->keterangan }}</p>
						</td>
					</tr>

                    <tr>
						<td>
							<p align="center">Setuju dibayar,</p><br>
							<br>
							<p align="center"><b><u>Drs.Zainuddin M.Rasyid</u></b></p>
                            <p align="center">Direktur Utama</p>
                            <b>Terbilang Rp.&emsp;<u>{{ format_uang($item->biaya) }}</u></b>
                            <p>Barang2/pekerjaan yang 	dimaksud telah diterima/<br>
								diselenggarakan dengan sempurna pada tanggal</p>
							<u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?= date('Y');?></u>

						</td>
						<td>
							<br><br><br><br>
							<p align="center">Lhokseumawe, {{ tanggal_indonesia($item->tanggal) }}</span><br></p>
							<p align="center">Yang Menerima</p>
							<br>
							<p align="left">N a m a<span style="padding-left:42px;">:<span style="padding-left:28px;"><u>{{ $item->nama }}</u></p>
                            <p align="left">Pekerjaan<span style="padding-left:27px;">:<span style="padding-left:27px;"><u>{{ $item->pekerjaan }}</u></p>
                            <p align="left">Alamat<span style="padding-left:45px;">:<span style="padding-left:27px;"><u>{{ $item->alamat }}</u></p>
                            <br>
                          	<p align="center">Lunas dibayar</p>
                           	<p align="center">Bendahara Pengeluaran<br></p><br>
                          	<p align="center"><b><u>Zuriani</u></b></p>
						</td>
					</tr>
				</table>
			<a href="#" class="btn btn-info ds" onclick="window.print()"><i class="fa fa-print"></i> Cetak Struk</a>
			<a href="{{ route('kwitansi.index') }}" class="btn btn-danger ds">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
