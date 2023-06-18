<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Membuat Data</title>
</head>
<body>
    <section class="text-center">   
        <div class="p-5 bg-image" style="
            background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
            height: 320px;
            "></div>  
  
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
            margin-top: -190px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(10px);
            ">
        <div class="card-body py-5 px-md-5">
  
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">CREATE DISINI</h2>

            <form action="/sampah/store" method="POST">
            @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="string" id="form3Example1" class="form-control" name="kepala_keluarga"/>
                    <label class="form-label" for="form3Example1">Kepala Keluarga</label>
                  </div>
                </div>
                
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="integer" id="form3Example2" class="form-control" name="no_rumah"/>
                    <label class="form-label" for="form3Example2">No Rumah</label>
                  </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="string" id="form3Example3" class="form-control" name="rt_rw"/>
                <label class="form-label" for="form3Example3">RT/RW</label>
              </div>

              <div class="form-outline mb-4">
                <input type="integer" id="form3Example4" class="form-control" name="total_karung_sampah"/>
                <label class="form-label" for="form3Example4">Total Sampah</label>
              </div>

              <div class="form-outline mb-4">
                <input type="date" id="form3Example4" class="form-control" name="tanggal_pengangkutan"/>
                <label class="form-label" for="form3Example4">Tanggal</label>
              </div>

              <button type="submit" class="btn btn-primary btn-block w-100">
                  Create
              </button>

              <div class=" mt-2">
                <a href="/" class="btn btn-primary mb-3 w-100">Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>