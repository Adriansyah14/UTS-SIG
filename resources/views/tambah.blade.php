<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Penanda</title>
    <link rel="stylesheet" href="/css/tambah.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="container">
        <header>
            <a href="javascript:history.back()">
                <i class="uil uil-step-backward"></i>
            </a>
        </header>
        
        <div class="content-container">
            <form action="{{route('tambah')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Nama Marker</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="nama_marker" placeholder="Nama penanda" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Latitude</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="latitude" name="latitude" placeholder="Koordinat Latitude" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Longitude</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="longitude" id="longitude" placeholder="Koordinat Longitude" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Deskripsi Lokasi</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="deskripsi" id="deskrpsi" placeholder="Deskripsi informsasi mengenai tempat yang di tambahkan" required>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="row">
                        <button type="submit">Tambah</button>
                    </div>
              </form>
        </div>
    </div>
</body>
</html>
