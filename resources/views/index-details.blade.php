@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perincian Tutoran</div>

                <div class="panel-body">
                    <p>Nama: {{$details->name}}</p>
                    <p>Email: {{$details->email}}</p>
                    <p>No. Telefon: {{$details->telefon}}</p>
                    <p>Peringkat: {{$details->peringkat}}</p>
                    <p>Subjek: {{$details->subjek}}</p>

                    @if($details->kategori == 'pusatTuisyen')
                      
                      <p>Alamat: {{$details->alamat}}</p>
                      <p>Kategori: Pusat Tuisyen</p>

                      @else
                      <p>Lokasi: {{$details->lokasi}}</p>
                      <p>Kategori: Tutor Persendirian</p>

                    @endif

                    {{-- <p>Gambar: </p> --}}
                    <p style=""><a href="{{ url('/home')}}" class="btn btn-primary pull-right">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
