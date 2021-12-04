<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    @php
                        $no = 1;
                    @endphp
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">ID kwitansi</th>
                                <th class="border-top-0">Tanggal</th>
                                <th class="border-top-0">Keterangan</th>
                                <th class="border-top-0">Biaya</th>
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
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Belom ada data</td>
                                </tr>
                            @endforelse
                                <tr>
                                    <td colspan="4" align="left">total pengeluaran</td>
                                    <td  align="left">{{ $total }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
