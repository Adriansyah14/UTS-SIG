
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/map.css">
        <title>Sistem Informasi Geografis</title>
    
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!--leaflet css-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
        crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
        crossorigin=""></script>
    
        <title>Responsive Website Landing Page Design</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>

        <section>
        <header>
            <h2><a href="#" class="logo">SIG</a></h2>
            <div class="navigation">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Info</a>
                <a href="#">Services</a>
                <a href="/login">Login</a>
            </div>
        </header>
        
        <div class="content">
            @foreach ($markers as $marker)
            <div class="info">
                <h2>{{$marker->nama_marker}} <br></h2>
                <p>{{$marker->deskripsi}}</p>
            </div>
            @endforeach
        </div>
        
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        </section>
    
        <script src="/js/map.js"></script>
    </body>
</html>
      