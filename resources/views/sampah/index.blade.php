<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <a href="/sampah/create" class="btn btn-primary bi bi-plus-circle mb-3"> Create</a>
        <a href="/show/trash" class="btn btn-success bi bi-trash mb-3"> Trash</a>
        <form action="" class="d-flex" role="search" method="GET">
            @csrf
            <input type="form-control mt-5" name="search_kepala_keluarga" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary bi bi-search" type="submit"></button>
        </form>
        <br>
        @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table table-bordered mb-3">
            <thead>
                <tr>
                    <th class="text-center">Kepala Keluarga</th>
                    <th class="text-center">No Rumah</th> 
                    <th class="text-center">RT/RW</th>
                    <th class="text-center">Karung Sampah</th>
                    <th class="text-center">Kriteria</th>
                    <th class="text-center">Tanggal Pengangkutan</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($sampah as $item)
                <tr>
                    <td class="text-center">{{$item['kepala_keluarga']}}</td>
                    <td class="text-center">{{$item['no_rumah']}}</td>
                    <td class="text-center">{{$item['rt_rw']}}</td>
                    <td class="text-center">{{$item['total_karung_sampah']}}</td>
                    <td class="text-center">{{$item['kriteria']}}</td>
                    <td class="text-center">{{$item['tanggal_pengangkutan']}}</td>
                    <td>
                    <form class="d-flex justify-content-center" class="d-flex justify-content-center" action="/sampah/delete/{{$item ['id']}}" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="/sampah/{{$item['id']}}" class="btn btn-warning bi bi-eye-slash"></a>
                            </div>

                            <div class="col-md-3">
                                <a href="/sampah/edit/{{$item['id']}}" class="btn btn-primary bi bi-pencil-square"></a> 
                            </div>
                                
                            <div class="col-md-3">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ini?')" class="btn btn-danger bi bi-trash3"></button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>