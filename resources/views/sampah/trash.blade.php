<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data API Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <a href="/" class="btn btn-primary bi bi-backspace mt-3"> Back</a>
        <br>
        @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table table-bordered my-3">
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
                        <form class="d-flex justify-content-center" action="{{route ('restore', $item['id'])}}" method=""> 
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-success bi bi-recycle mb-3"></button> _
                            <a href="{{route ('deletePermanent', $item['id'])}}" onclick="return confirm('Hapus Permanen?')" class="btn btn-danger bi bi-trash mb-3"></a>
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