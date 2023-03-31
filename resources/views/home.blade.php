@extends('layouts.sidebar')
@section('title','Dashboard')
@section('content')
<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>
        
        <!--<img src="images/profile.jpg" alt="">-->
    </div>

    <div class="dash-content">
        

        <div class="activity">
            <div class="title">
                <div class="box">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Penanda terbaru</span>
                </div>
                <a href="/tambah" class="box">
                    <i class="uil uil-plus"></i>
                    <span class="text">Tambah penanda</span>
                </a>
            </div>

            <div class="activity-data">
                <div class="data names">
                    <span class="data-title">ID</span>
                    @foreach ($markers as $marker)
                    <span class="data-list">{{ $marker->id }}</span>
                    @endforeach
                    
                </div>
                <div class="data email">
                    <span class="data-title">Nama</span>
                    @foreach ($markers as $marker)
                    <span class="data-list">{{$marker->nama_marker}}</span>
                        
                    @endforeach
                </div>
                <div class="data joined">
                    <span class="data-title">Koor Latitude</span>
                    @foreach ($markers as $marker)
                    <span class="data-list">{{$marker->latitude}}</span>
                    @endforeach
                </div>
                <div class="data type">
                    <span class="data-title">Koor Longitude</span>
                    @foreach ($markers as $marker)
                    <span class="data-list">{{$marker->longitude}}</span>
                    @endforeach
                </div>
                <div class="data type">
                    <span class="data-title">Tindakan</span>
                    @foreach ($markers as $marker)

                    <form action="/hapus/{{$marker->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="aksi">Delete</button>
                    </form>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection